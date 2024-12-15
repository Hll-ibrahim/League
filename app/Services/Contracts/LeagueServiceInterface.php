<?php

namespace App\Services\Contracts;

interface LeagueServiceInterface
{
    public function add($data);
    public function getLeagueBySportId($id);
    public function getLeagueTypes();
    public function getLeagueNameById($id);
    public function getSeasons();
    public function all();
    public function delete($id);
    public function update($data);
    public function getTeamsFromLeagueSport(int $league_id);
}
