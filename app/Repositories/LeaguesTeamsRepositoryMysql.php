<?php

namespace App\Repositories;

use App\Models\LeagueTeam;
use App\Repositories\Contracts\LeaguesTeamsRepositoryInterface;

class LeaguesTeamsRepositoryMysql implements LeaguesTeamsRepositoryInterface{
    public function getTeamsFromLeague(int $season_league_id){
        return LeagueTeam::where('season_league_id',$season_league_id)->get();
    }

    public function addTeam(array $team){
        return LeagueTeam::create($team);
    }

    public function removeTeam(int $teamId){
        return LeagueTeam::destroy($teamId);
    }
}
