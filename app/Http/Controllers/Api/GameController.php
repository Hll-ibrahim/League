<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\BaseController;
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


    public function set_event(Request $request){
        return response()->json($request);
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
            $home_team_player_count = $home_team->playerStatistics()->count();
            $away_team_player_count = $away_team->playerStatistics()->count();
            if($league->player_count == $home_team_player_count && $away_team_player_count == $home_team_player_count){
                // lig içerisindeki oyuncu sayısı ile takım için girilen oyuncu sayıları eşit ise
                 return $this->service->start($game_id);
            }
            else {
                return response()->json([
                    'error'=>'Player count is not correct'
                ]);
            }

        }
    }
}
