<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use function PHPUnit\Framework\matches;

class GameController extends Controller
{
    public function getMatches(Request $request){
        $user = User::find(1);
        if ($user) {
            $games = $user->refereeGames;  // Kullanıcıya ait oyunları alıyoruz
            $matches = [[]];
            foreach ($games as $game) {
                $match = [];
                array_push($match, [
                    'home_team' => $game->home_team->name,
                    'away_team' => $game->away_team->name,
                    'home_score' => $game->home_score,
                    'away_score' => $game->away_score,
                ]);
                array_push($matches, $match);
            }
            return response()->json([
                'success' => true,
                'matches' => $games,
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kullanıcı doğrulama hatası',
            ], 401);  // Unauthorized
        }
    }
}
