<?php

namespace App\Repositories\Contracts;

use App\Models\League;
use App\Models\Sport;

interface LeagueRepositoryInterface
{
    public function createSport($data);
    public function getSports();
    public function getLeagueById($id);
    public function update(League $league, $data);
    public function delete($id);
}
