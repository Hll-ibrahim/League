<?php

namespace App\Services\Contracts;

interface TeamPlayerServiceInterface{

    public function getPlayersFromTeam(int $team_id);

    public function getPlayerFullName(int $player_id);

    public function getPlayedGames(int $player_id);
    public function getGoalsInSeason(int $player_id);
    public function getAssistsInSeason(int $player_id);
    public function getLeagueTeam(int $league_team_id);
}
