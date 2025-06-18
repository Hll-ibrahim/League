<?php

namespace App\Repositories\Contracts;

use App\Models\League;
use App\Models\Sport;

interface LeagueRepositoryInterface extends BaseRepositoryInterface
{
    public function createLeague($data);
    public function getLeagues();
    public function getLeagueBySportId($id);
    public function getLeagueTypes();
    public function getSeasons();
    public function delete($id);
    public function getTeamsFromSport(int $sport_id,int $league_id);
}
