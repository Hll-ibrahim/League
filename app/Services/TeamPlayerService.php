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
        $player_statistics = $team_player->statistics;
        return count($player_statistics);
    }

}
