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
}
