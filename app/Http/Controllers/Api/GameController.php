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
        $referee_id = $request->input('referee_id');
        if ($referee_id) {
            $referee = $this->refereeService->getById($referee_id);
            return $referee->games;
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Unable to get referee id',
            ], 401);
        }    }

    public function set_event(Request $request){
        return response()->json($request);
    }
}
