<?php

namespace App\Services;

use App\Repositories\Contracts\TeamPlayerRepositoryInterface;
use App\Services\Contracts\TeamPlayerServiceInterface;

class TeamPlayerService implements TeamPlayerServiceInterface{

    protected $teamPlayerRepository;
    public function __construct(TeamPlayerRepositoryInterface $teamPlayerRepository){
        $this->teamPlayerRepository = $teamPlayerRepository;
    }
    public function getPlayersFromTeam(int $team_id){
        return $this->teamPlayerRepository->getPlayersFromTeam($team_id);
    }

    public function getPlayerFullName(int $player_id){
        $team_player = $this->teamPlayerRepository->getPlayerById($player_id);
        $player = $team_player->player;
        return $player->first_name . ' ' . $player->last_name;
    }

    public function getPlayedGames(int $player_id){
        $team_player = $this->teamPlayerRepository->getPlayerById($player_id);
        $league_team = $team_player->league_team;
        if(isset($team_player) and isset($league_team)){
            return $this->teamPlayerRepository->playedGamesInSeason($team_player->player_id,$league_team->season_league_id);
        }
        return false;
    }

    public function getLeagueTeam(int $league_team_id){
        return $this->teamPlayerRepository->getLeagueTeam($league_team_id);
    }

    public function getGoalsInSeason(int $player_id){
        return $this->teamPlayerRepository->getGoalsInSeason($player_id);
    }
    public function getAssistsInSeason(int $player_id){
        return $this->teamPlayerRepository->getAssistsInSeason($player_id);
    }


}
