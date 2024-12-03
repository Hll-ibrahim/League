<?php

namespace App\Repositories\Contracts;

interface LeaguesTeamsRepositoryInterface {
    function getTeamsFromLeague(int $league);
}
