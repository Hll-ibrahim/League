<?php

namespace App\Services;

use App\Services\Contracts\LeagueServiceInterface;
use App\Services\Contracts\RequestServiceInterface;
use App\Services\Contracts\SportServiceInterface;
use App\Services\Contracts\TeamServiceInterface;

class RequestService implements RequestServiceInterface
{
    protected $teamService;
    protected $leagueService;
    protected $sportService;

    public function __construct(SportServiceInterface $teamService, LeagueServiceInterface $leagueService, TeamServiceInterface $sportService) {
        $this->teamService = $teamService;
        $this->leagueService = $leagueService;
        $this->sportService = $sportService;
    }

    public function handleRequest($request) {

    }
}
