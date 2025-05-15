<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\BaseController;
use App\Services\GameService;
use Illuminate\Http\Request;

class GameController extends BaseController
{

    public function __construct(GameService $gameService){
        parent::__construct($gameService);
    }

    public function get_matches(Request $request){
        $user = $request->user();
        if ($user) {
            return $this->service->getGames($user);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Kullanıcı doğrulama hatası',
            ], 401);  // Unauthorized
        }    }

    public function set_event(Request $request){
        return response()->json($request);
    }
}
