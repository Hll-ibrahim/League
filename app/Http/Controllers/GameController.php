<?php

namespace App\Http\Controllers;

use App\Services\GameService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class GameController extends BaseController
{
    public function __construct(GameService $gameService){
        parent::__construct($gameService);
    }

    public function getMatches(Request $request){
        $user = $request->user();
        if ($user) {
            return $this->service->getGames($user);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kullanıcı doğrulama hatası',
            ], 401);  // Unauthorized
        }
    }

    public function setScore(Request $request){

        $match = $this->service->getById($request->match_id);
        if(!$match){
            return response()->json(['success' => false,'error'=>'Match not found'],404);
        }
        $scoring_team = $request->scoring_team;
        $goal = $request->goals;
        switch ($scoring_team) {
            case 'home_team':
                $this->service->addHomeScore($match,$goal);
                break;
            case 'away_team':
                $this->service->addAwayScore($match,$goal);
                break;
        }
        return response()->json(['success' => true,'match' => $match,'scoring_team' => $scoring_team]);
    }

    public function fetch(Request $request){
        $league_id = $request->league_id;
        $season_id = $request->season_id;
        if(isset($league_id) and isset($season_id)){
            $games = $this->service->getGamesFromSeasonLeague($season_id,$league_id);
        }



        return DataTables::of($games)
            ->editColumn('home_team_id', function ($game) {
                return $game->homeTeam->team->name;
            })
            ->editColumn('away_team_id', function ($game) {
                return $game->awayTeam->team->name;
            })
            ->editColumn('referee_id', function ($game) {
                return $game->referee->user->name;
            })
            ->addColumn('detail', function ($game) {
                return '<a href="' . route('sport.league.game.detail', $game->id) . '" class="btn btn-info btn-xs">Detail</a>';
            })
            ->addColumn('date', function ($game) {
                return \Carbon\Carbon::parse($game->date)->translatedFormat('d F Y');
            })
            ->addIndexColumn()
            ->rawColumns(['detail'])->make(true);
    }

    public function detail($id){
        $game = $this->service->getById($id);
        if(!$game){
            return response()->json(['success' => false,'error'=>'Match not found'],404);
        }
        $events = $game->events()->with(['playerStatistic.TeamPlayer.player'])->get();
        $home_team = $game->homeTeam;
        $away_team = $game->awayTeam;
        $season_league = $game->seasonLeague;
        $league = $season_league->league;
        $season = $season_league->season;


        $matchStatsRaw = $this->service->calculateTeamStatistics($game);

        // Blade’e uygun dizi yapısı
        $team1 = $matchStatsRaw['team_1'] ?? [];
        $team2 = $matchStatsRaw['team_2'] ?? [];

        $team1Stats = $team1['statistics'] ?? [];
        $team2Stats = $team2['statistics'] ?? [];

        $statistics = [
            'home' => [
                'team' => (object)($team1['team'] ?? ['logo' => '', 'name' => 'Unknown']),
                'shot_accuracy' => $team1Stats['shot_accuracy'] ?? 0,
                'pass_accuracy' => $team1Stats['pass_accuracy'] ?? 0,
                'stats' => [
                    'Fou' => $team1Stats['fouls'] ?? 0,
                    'OFF' => $team1Stats['offsides'] ?? 0,
                    'Sho' => $team1Stats['shots']['total'] ?? 0,
                ],
            ],
            'away' => [
                'team' => (object)($team2['team'] ?? ['logo' => '', 'name' => 'Unknown']),
                'shot_accuracy' => $team2Stats['shot_accuracy'] ?? 0,
                'pass_accuracy' => $team2Stats['pass_accuracy'] ?? 0,
                'stats' => [
                    'Fou' => $team2Stats['fouls'] ?? 0,
                    'OFF' => $team2Stats['offsides'] ?? 0,
                    'Sho' => $team2Stats['shots']['total'] ?? 0,
                ],
            ],
            'ball_possession' => [
                'home' => $team1Stats['ball_possession'] ?? 50,
                'away' => $team2Stats['ball_possession'] ?? 50,
            ],
            'main_table' => [
                [
                    'label' => 'Shots (on goal)',
                    'home' => ($team1Stats['shots']['total'] ?? 0) . ' (' . ($team1Stats['shots']['on_goal'] ?? 0) . ')',
                    'away' => ($team2Stats['shots']['total'] ?? 0) . ' (' . ($team2Stats['shots']['on_goal'] ?? 0) . ')',
                ],
                [
                    'label' => 'Corner Kicks',
                    'home' => $team1Stats['corner_kicks'] ?? 0,
                    'away' => $team2Stats['corner_kicks'] ?? 0,
                ],
                [
                    'label' => 'Saves',
                    'home' => $team1Stats['saves'] ?? 0,
                    'away' => $team2Stats['saves'] ?? 0,
                ],
                [
                    'label' => 'Yellow Cards',
                    'home' => $team1Stats['yellow_cards'] ?? 0,
                    'away' => $team2Stats['yellow_cards'] ?? 0,
                ],
                [
                    'label' => 'Red Cards',
                    'home' => $team1Stats['red_cards'] ?? 0,
                    'away' => $team2Stats['red_cards'] ?? 0,
                ],
            ],
        ];




        return view('game.detail', compact('game', 'events', 'home_team', 'away_team', 'league', 'season', 'statistics'));
    }
}
