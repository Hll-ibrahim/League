<?php

namespace App\Services;


class RequestService
{
    protected $teamService;
    protected $leagueService;
    protected $sportService;
    protected $gameService;
    protected $seasonService;
    public function __construct(SportService $sportService, LeagueService $leagueService, TeamService $teamService, GameService $gameService,SeasonService $seasonService) {
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
