<?php

namespace App\Services;

use App\Models\LeagueTeam;
use App\Models\Team;
use App\Repositories\Contracts\LeaguesTeamsRepositoryInterface;

class LeaguesTeamsService extends BaseService {
    public function __construct(LeaguesTeamsRepositoryInterface $leaguesTeamsRepository){
        parent::__construct($leaguesTeamsRepository);
    }
    public function getTeamsFromLeague($leagueId)
    {
        return $this->repository->getTeamsFromLeague($leagueId);
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

    public function getLeagueTeamsBySeasonLeague(int $league_season_id)
    {
        return $this->repository->getBySeasonLeague($league_season_id);
    }



}
