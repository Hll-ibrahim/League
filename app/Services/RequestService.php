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

    public function __construct(SportServiceInterface $sportService, LeagueServiceInterface $leagueService, TeamServiceInterface $teamService) {
        $this->teamService = $teamService;
        $this->leagueService = $leagueService;
        $this->sportService = $sportService;
    }

    public function handleRequest($request) {

        switch ($request->input('type')) {
            case '1'://team
                return $this->teamService->processControl($request);
            case '2'://league
                return $this->leagueService->processControl($request);
            case '3'://sport
                return $this->sportService->processControl($request);
            default:
                throw new \Exception("Invalid request type");
        }
    }
}
