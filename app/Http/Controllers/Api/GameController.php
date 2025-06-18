<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\BaseController;
use App\Models\Event;
use App\Models\EventType;
use App\Models\Game;
use App\Models\PlayerStatistic;
use App\Services\GameService;
use App\Services\RefereeService;
use Illuminate\Http\Request;

class GameController extends BaseController
{

    protected $refereeService;
    public function __construct(GameService $gameService, RefereeService $refereeService){
        parent::__construct($gameService);
        $this->refereeService = $refereeService;
    }

    public function get_matches(Request $request){
        $user = $request->user();
        $referee_ids = $user->referees->pluck('id')->toArray();

        $all_matches = collect();

        foreach ($referee_ids as $referee_id) {
            $matches = $this->refereeService->getMatches($referee_id);
            if ($matches) {
                $all_matches = $all_matches->merge($matches);
            }
        }

        // Pagination (manuel sayfalama için)
        $perPage = 5;
        $page = $request->get('page', 1);
        $paginated = new \Illuminate\Pagination\LengthAwarePaginator(
            $all_matches->forPage($page, $perPage)->values(),
            $all_matches->count(),
            $perPage,
            $page,
            ['path' => url()->current()]
        );

        return response()->json($paginated);
    }


    public function set_event(Request $request)
    {
        $request->validate([
            'player_statistic_id' => 'required|exists:player_statistics,id',
            'event_type_id' => 'required|exists:event_types,id',
            'minute' => 'required|numeric'
        ]);

        $event = Event::create([
            'player_statistic_id' => $request->player_statistic_id,
            'event_type_id' => $request->event_type_id,
            'minute' => $request->minute,
        ]);

        if($request->event_type_id == 1){ // score
            $player_statistic = PlayerStatistic::find($request->player_statistic_id);
            $game = $player_statistic->game;
            $team_player = $player_statistic->teamPlayer;
            $league_team = $team_player->leagueTeam;
            if($game->home_team_id == $league_team->id){
                $game->home_score++;
            }
            else if($game->away_team_id == $league_team->id){
                $game->away_score++;
            }
            $game->save();
        }

        return response()->json(['success' => true, 'event' => $event]);
    }


    public function start_match(Request $request){
        $game_id = $request->input('game_id');
        $referee_ids = $request->user()->referees->pluck('id')->toArray();
        $game = $this->service->getById($game_id);
        if ($game && in_array($game_id,$referee_ids )) {
            // game_id doğruysa ve oyunun hakemi isteği atmışsa
            $home_team = $game->homeTeam; // league team sınıfının bir nesnesi
            $away_team = $game->awayTeam;
            $league = $game->league;
            $home_team_player_count = $home_team->playerStatistics()
                ->where('game_id', $game_id)
                ->count();

            $away_team_player_count = $away_team->playerStatistics()
                ->where('game_id', $game_id)
                ->count();

            return $this->service->start($game_id);

            if($league->player_count == $home_team_player_count && $away_team_player_count == $home_team_player_count){
                // lig içerisindeki oyuncu sayısı ile takım için girilen oyuncu sayıları eşit ise
                 return $this->service->start($game_id);
            }
            else {
                return response()->json([
                    'error'=>'Player count is not available'
                ],400);
            }
        }
        return response()->json(['error'=>'Not Found'],404);
    }

    public function get_match(Request $request)
    {
        $game_id = $request->input('game_id');
        $game = $this->service->getById($game_id);

        if (!$game) {
            return response()->json(['success' => false, 'message' => 'Game not found'], 404);
        }

        // Oyuncuları al
        $players = $this->service->getPlayersOfGame($game);

        return response()->json([
            'success' => true,
            'match' => [
                'id' => $game->id,
                'home_team' => $game->homeTeam->team->name,
                'away_team' => $game->awayTeam->team->name,
                'stadium' => $game->stadium->name,
                'referee' => $game->referee->user->name,
                'date' => $game->date,
                'started_at' => $game->started_at,
            ],
            'players' => $game->playerStatistics->map(function ($ps) {
                return [
                    'id' => $ps->id, // player_statistic_id olacak
                    'name' => $ps->teamPlayer->player->first_name . ' ' . $ps->teamPlayer->player->last_name
                ];
            }),
            'event_types' => EventType::all(['id', 'name']),
        ]);
    }


    public function getFilteredMatches(Request $request)
    {
        $user = $request->user();
        $referee_ids = $user->referees->pluck('id')->toArray();
        $filter = $request->filter;
        $now = now();

        $matchesQuery = Game::with([
            'homeTeam.team',
            'awayTeam.team',
            'seasonLeague.league',
            'seasonLeague.season',
        ])->whereIn('referee_id', $referee_ids);

        if ($filter === 'eligible') {
            // Bitmemiş olan (yani 'waiting' VEYA 'started') ve tarihi geçmiş olanlar
            $matchesQuery->whereIn('status', ['waiting', 'started'])
                ->where('date', '<', $now);
        } elseif ($filter === 'future') {
            $matchesQuery->where('date', '>', $now);
        } elseif ($filter === 'past') {
            $matchesQuery->where('status', 'ended')
                ->where('date', '<', $now);
        }

        return $matchesQuery->orderBy('date')->paginate(5);
    }



}
