<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Contracts\GameServiceInterface;
use App\Services\GameService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\matches;

class GameController extends Controller
{
    protected $gameService;
    public function __construct(GameServiceInterface $gameService){
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
}
