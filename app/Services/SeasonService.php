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

    public function processControl($request)
    {
        switch ($request['process']) {
            case '2'://R
                return $this->all();
            case '2.01':
                return $this->getSeasonNameById($request->get('id'));
            default:
                throw new \Exception("Invalid request type");
        }
    }
    public function all(){
        return $this->seasonRepository->getSeasons();
    }

    public function getSeasonNameById($seasonId)
    {
        return $this->seasonRepository->getSeasonNameById($seasonId);
    }
}
