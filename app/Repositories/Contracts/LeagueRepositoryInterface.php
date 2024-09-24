<?php

namespace App\Repositories\Contracts;

use App\Models\League;

interface LeagueRepositoryInterface
{
    public function getLeagues();

    public function queryLeagues();

    public function getLeagueById($id);
}
