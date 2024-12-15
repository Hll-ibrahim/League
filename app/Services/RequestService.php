<?php

namespace App\Services;

use App\Services\Contracts\GameServiceInterface;
use App\Services\Contracts\LeagueServiceInterface;
use App\Services\Contracts\RequestServiceInterface;
use App\Services\Contracts\SeasonServiceInterface;
use App\Services\Contracts\SportServiceInterface;
use App\Services\Contracts\TeamServiceInterface;

class RequestService implements RequestServiceInterface
{
    protected $teamService;
    protected $leagueService;
    protected $sportService;
    protected $gameService;
    protected $seasonService;
    public function __construct(SportServiceInterface $sportService, LeagueServiceInterface $leagueService, TeamServiceInterface $teamService, GameServiceInterface $gameService,SeasonServiceInterface $seasonService) {
        $this->teamService = $teamService;
        $this->leagueService = $leagueService;
        $this->sportService = $sportService;
        $this->gameService = $gameService;
        $this->seasonService = $seasonService;
    }

    public function handleRequest($request) {
        switch ($request['type']) {
            case '1'://team
                return $this->teamService->processControl($request);
            case '2'://league
                return $this->leagueService->processControl($request);
            case '3'://sport
                return $this->sportService->processControl($request);
            case '4'://game
                return $this->gameService->processControl($request);
            default:
                throw new \Exception("Invalid request type");
        }
    }
}
