<?php

namespace App\Services;

use App\Repositories\Contracts\LeagueRepositoryInterface;
use App\Repositories\Contracts\SeasonRepositoryInterface;
use App\Services\Contracts\SeasonServiceInterface;

class SeasonService implements SeasonServiceInterface
{
    protected $seasonRepository;

    function __construct(SeasonRepositoryInterface $leagueRepository) {
        $this->seasonRepository = $leagueRepository;
    }

    public function all(){
        return $this->seasonRepository->getSeasons();
    }

    public function getSeasonNameById($seasonId)
    {

        return $this->seasonRepository->getSeasonNameById($seasonId);
    }
}
