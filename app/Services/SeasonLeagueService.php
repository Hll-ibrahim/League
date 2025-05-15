<?php

namespace App\Services;

use App\Models\SeasonLeague;
use App\Repositories\BaseRepositoryMysql;
use App\Repositories\Contracts\SeasonLeagueRepositoryInterface;

class SeasonLeagueService extends BaseService
{
    public function __construct(SeasonLeagueRepositoryInterface $seasonLeagueRepository){
        parent::__construct($seasonLeagueRepository);
    }

    public function start(int $league_id, int $season_id)
    {
        $season_league = $this->repository->getByForeign($league_id,$season_id);
        return $this->repository->start($season_league->id);
    }

    public function getByForeign(int $league_id, int $season_id){
        return $this->repository->getByForeign($league_id,$season_id);
    }
}
