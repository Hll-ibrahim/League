<?php

namespace App\Repositories\Contracts;

use App\Models\League;
use App\Models\Sport;

interface LeagueRepositoryInterface
{
    public function createLeague($data);
    public function getLeagues();
    public function getLeagueBySportId($id);
    public function getLeagueTypes();
    public function getSeasons();
    public function update(League $league, $data);
    public function delete($id);
}
