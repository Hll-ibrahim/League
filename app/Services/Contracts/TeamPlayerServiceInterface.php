<?php

namespace App\Services\Contracts;

interface TeamPlayerServiceInterface{

    public function getPlayersFromTeam(int $team_id);

    public function getPlayerFullName(int $player_id);

    public function getPlayedGames(int $player_id);
}
