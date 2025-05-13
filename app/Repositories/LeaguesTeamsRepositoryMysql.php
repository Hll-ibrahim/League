<?php

namespace App\Repositories;

use App\Models\LeagueTeam;
use App\Repositories\Contracts\LeaguesTeamsRepositoryInterface;

class LeaguesTeamsRepositoryMysql extends BaseRepository implements LeaguesTeamsRepositoryInterface{
    public function __construct(LeagueTeam $leagueTeam){
        parent::__construct($leagueTeam);
    }
    public function getBySeasonLeague(int $season_league_id){
        return $this->model->where('season_league_id',$season_league_id)->get();
    }
}
