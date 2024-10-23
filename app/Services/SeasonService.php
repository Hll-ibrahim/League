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
            default:
                throw new \Exception("Invalid request type");
        }
    }
    public function all(){
        return $this->seasonRepository->getSeasons();
    }
}
