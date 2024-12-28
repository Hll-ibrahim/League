<?php

namespace App\Repositories\Contracts;

interface TeamPlayerRepositoryInterface {
    public function getPlayersFromTeam(int $teamId);

    public function getPlayerById(int $playerId);

    public function playedGamesInSeason(int $playerId, int $seasonLeagueId);

    public function getGoalsInSeason(int $player_id);
    public function getAssistsInSeason(int $player_id);
    public function getLeagueTeam(int $league_team_id);

}
