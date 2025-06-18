<?php

namespace App\Services;

use App\Repositories\Contracts\TeamPlayerRepositoryInterface;

class TeamPlayerService extends BaseService {

    public function __construct(TeamPlayerRepositoryInterface $teamPlayerRepository){
        parent::__construct($teamPlayerRepository);
    }
    public function getPlayersFromTeam(int $team_id){
        return $this->repository->getPlayersFromTeam($team_id);
    }

    public function getPlayerFullName(int $player_id){
        $team_player = $this->repository->getPlayerById($player_id);
        $player = $team_player->player;
        return $player->first_name . ' ' . $player->last_name;
    }

    public function getPlayedGames(int $player_id){
        $team_player = $this->repository->getPlayerById($player_id);
        $league_team = $team_player->league_team;
        if(isset($team_player) and isset($league_team)){
            return $this->repository->playedGamesInSeason($team_player->player_id,$league_team->season_league_id);
        }
        return false;
    }

    public function getLeagueTeam(int $league_team_id){
        return $this->repository->getLeagueTeam($league_team_id);
    }

    public function getGoalsInSeason(int $player_id){
        return $this->repository->getGoalsInSeason($player_id);
    }
    public function getAssistsInSeason(int $player_id){
        return $this->repository->getAssistsInSeason($player_id);
    }


}
