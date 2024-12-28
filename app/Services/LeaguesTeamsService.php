<?php

namespace App\Services;

use App\Models\LeagueTeam;
use App\Models\Team;
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
        $league = $leagueTeam->seasonLeague->league ;
        return $league->$type;
    }

    public function getTeamName($leagueTeam){
        $team = $leagueTeam->team;
        return $team->name;
    }

    public function addTeamToLeague($leagueTeam){
        return $this->leaguesTeamsRepository->addTeam($leagueTeam);
    }

    public function removeTeamFromLeague($leagueTeam_id){
        return $this->leaguesTeamsRepository->removeTeam($leagueTeam_id);
    }

    public function getLeagueTeamsFromLeague(int $season_league_id)
    {
        return LeagueTeam::where('season_league_id', $season_league_id)->get();
    }

}
