<?php

namespace App\Repositories\Contracts;

interface TeamPlayerRepositoryInterface {
    public function getPlayersFromTeam(int $teamId);

    public function getPlayerById(int $playerId);
}
