<?php

namespace App\Repositories;

use App\Models\LeaguesTeams;
use App\Repositories\Contracts\LeaguesTeamsRepositoryInterface;

class LeaguesTeamsRepositoryMysql implements LeaguesTeamsRepositoryInterface{
    public function getTeamsFromLeague(int $league){
        return LeaguesTeams::where('league_id',$league)->get();
    }

    public function addTeam(array $team){
        return LeaguesTeams::create($team);
    }

    public function removeTeam(int $teamId){
        return LeaguesTeams::destroy($teamId);
    }
}
