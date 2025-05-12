<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\GameService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\DataTables;
use function PHPUnit\Framework\matches;

class GameController extends Controller
{
    protected $gameService;
    public function __construct(GameService $gameService){
        $this->gameService = $gameService;
    }

    public function getMatches(Request $request){
        $user = $request->user();
        if ($user) {
            return $this->gameService->getGames($user);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kullanıcı doğrulama hatası',
            ], 401);  // Unauthorized
        }
    }

    public function setScore(Request $request){

        $match = $this->gameService->getGame($request->match_id);
        if(!$match){
            return response()->json(['success' => false,'error'=>'Match not found'],404);
        }
        $scoring_team = $request->scoring_team;
        $goal = $request->goals;
        switch ($scoring_team) {
            case 'home_team':
                $this->gameService->addHomeScore($match,$goal);
                break;
            case 'away_team':
                $this->gameService->addAwayScore($match,$goal);
                break;
        }
        return response()->json(['success' => true,'match' => $match,'scoring_team' => $scoring_team]);
    }

    public function fetch(Request $request){
        $league_id = $request->league_id;
        $season_id = $request->season_id;
        if(isset($league_id) and isset($season_id)){
            $games = $this->gameService->getGamesFromSeasonLeague($season_id,$league_id);
        }



        return DataTables::of($games)
            ->editColumn('home_team_id', function ($game) {
                return $game->home_team->name;
            })
            ->editColumn('away_team_id', function ($game) {
                return $game->away_team->name;
            })
            ->addColumn('detail', function ($leagues) {
                return '<a href="' . route('sport.league.game.detail', $leagues->id) . '" class="btn btn-info btn-xs">Detail</a>';
            })
            ->addIndexColumn()
            ->rawColumns(['detail'])->make(true);
    }

    public function detail($id){
        $game = $this->gameService->getGame($id);
        if(!$game){
            return response()->json(['success' => false,'error'=>'Match not found'],404);
        }
        $events = $game->events()->with(['playerStatistic.TeamPlayer.player'])->get();
        $home_team = $game->home_team;
        $away_team = $game->away_team;
        $season_league = $game->season_league;
        $league = $season_league->league;
        $season = $season_league->season;

        return view('game.detail',compact('game','events','home_team','away_team','league','season'));
    }
}
