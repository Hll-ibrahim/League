<?php

namespace App\Services;

use App\Repositories\Contracts\LeagueRepositoryInterface;
use App\Repositories\Contracts\SeasonRepositoryInterface;

class SeasonService extends BaseService
{

    function __construct(SeasonRepositoryInterface $leagueRepository) {
       parent::__construct($leagueRepository);
    }

    public function getSeasonNameById($seasonId)
    {

        return $this->repository->getSeasonNameById($seasonId);
    }
}
