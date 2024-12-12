<?php

namespace App\Repositories;

use App\Models\LeagueTeam;
use App\Repositories\Contracts\LeaguesTeamsRepositoryInterface;

class LeaguesTeamsRepositoryMysql implements LeaguesTeamsRepositoryInterface{
    public function getTeamsFromLeague(int $league){
        return LeagueTeam::where('league_id',$league)->get();
    }

    public function addTeam(array $team){
        return LeagueTeam::create($team);
    }

    public function removeTeam(int $teamId){
        return LeagueTeam::destroy($teamId);
    }
}
