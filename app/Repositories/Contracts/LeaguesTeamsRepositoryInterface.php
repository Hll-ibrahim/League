<?php

namespace App\Repositories\Contracts;

interface LeaguesTeamsRepositoryInterface {
    function getTeamsFromLeague(int $season_league_id);

    function addTeam(array $team);

    function removeTeam(int $teamId);
}
