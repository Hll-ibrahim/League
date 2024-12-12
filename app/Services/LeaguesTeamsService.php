<?php

namespace App\Services;

use App\Repositories\Contracts\LeaguesTeamsRepositoryInterface;
use App\Services\Contracts\LeaguesTeamsServiceInterface;

class LeaguesTeamsService implements LeaguesTeamsServiceInterface{
    protected $leaguesTeamsRepository;
    public function __construct(LeaguesTeamsRepositoryInterface $leaguesTeamsRepository){
        $this->leaguesTeamsRepository = $leaguesTeamsRepository;
    }
    public function getTeamsFromLeague($leagueId)
    {
        return $this->leaguesTeamsRepository->getTeamsFromLeague($leagueId);
    }

    public function getPoint($leagueTeam){
        $win = $leagueTeam->win * $this->getPointConvert($leagueTeam,'winPoint');
        $draw = $leagueTeam->draw * $this->getPointConvert($leagueTeam,'drawPoint');
        $lose = $leagueTeam->lose * $this->getPointConvert($leagueTeam,'losePoint');
        return $win + $draw + $lose;
    }

    public function getPointConvert($leagueTeam, $type){
        $league = $leagueTeam->league;
        $point = $league->$type;
        return $point;
    }

    public function getTeamName($leagueTeam){
        $team = $leagueTeam->team;
        return $team->name;
    }

    public function addTeamToLeague($leagueTeam){
        return $this->leaguesTeamsRepository->addTeam($leagueTeam);
    }

}
