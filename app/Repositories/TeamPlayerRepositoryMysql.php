<?php

namespace App\Repositories;

use App\Models\Event;
use App\Models\TeamPlayer;
use App\Repositories\Contracts\TeamPlayerRepositoryInterface;

class TeamPlayerRepositoryMysql implements TeamPlayerRepositoryInterface{

    public function getPlayersFromTeam(int $teamId){
        return TeamPlayer::where('league_team_id', $teamId)->get();
    }

    public function getPlayerById(int $playerId){
        return TeamPlayer::findOrFail($playerId);
    }

    public function playedGamesInSeason(int $playerId, int $seasonLeagueId){
        return Event::where('event_type_id', 1)->whereHas('playerStatistic', function ($query) use ($playerId, $seasonLeagueId) {
            $query->where('team_player_id', $playerId)
                ->whereHas('game', function ($subQuery) use ($seasonLeagueId) {
                    $subQuery->where('season_league_id', $seasonLeagueId);
                });
        })->count();
    }


    public function getGoalsInSeason(int $player_id){

    }
    public function getAssistsInSeason(int $player_id){

    }
    public function getLeagueTeam(int $league_team_id){

    }

}
