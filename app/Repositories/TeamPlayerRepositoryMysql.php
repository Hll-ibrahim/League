<?php

namespace App\Repositories;

use App\Models\TeamPlayer;
use App\Repositories\Contracts\TeamPlayerRepositoryInterface;

class TeamPlayerRepositoryMysql implements TeamPlayerRepositoryInterface{

    public function getPlayersFromTeam(int $teamId){
        return TeamPlayer::where('team_id', $teamId)->get();
    }

    public function getPlayerById(int $playerId){
        return TeamPlayer::findOrFail($playerId);
    }

    public function playedGamesInSeason(int $playerId, int $seasonLeagueId){

    }

}
