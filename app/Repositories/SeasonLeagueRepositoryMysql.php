<?php

namespace App\Repositories;

use App\Models\SeasonLeague;
use App\Repositories\Contracts\SeasonLeagueRepositoryInterface;

class SeasonLeagueRepositoryMysql extends BaseRepositoryMysql implements SeasonLeagueRepositoryInterface
{
    public function __construct(SeasonLeague $model){
        parent::__construct($model);
    }

    public function getByForeign($league_id, $season_id)
    {
        return $this->model->where('league_id',$league_id)->where('season_id',$season_id)->first();
    }

    public function start($season_league_id)
    {
        $season_league = $this->getById($season_league_id);
        $season_league->update(['status'=>'started']);
        return $season_league;
    }
}
