<?php

namespace App\Repositories;

use App\Models\LeaguesTeams;
use App\Repositories\Contracts\LeaguesTeamsRepositoryInterface;

class LeaguesTeamsRepositoryMysql implements LeaguesTeamsRepositoryInterface{
    public function getTeamsFromLeague(int $league){
        return LeaguesTeams::where('league_id',$league)->get();
    }
}
