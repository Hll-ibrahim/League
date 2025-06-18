<?php

namespace App\Http\Controllers;

use App\Services\SeasonLeagueService;
use Illuminate\Http\Request;

class SeasonLeagueController extends BaseController
{
    public function __construct(SeasonLeagueService $seasonLeagueService){
        parent::__construct($seasonLeagueService);
    }

    public function get_by_foreign(Request $request){
        $season_id = $request->season_id;
        $league_id = $request->league_id;

        return $this->service->getByForeign($league_id,$season_id);
    }
}
