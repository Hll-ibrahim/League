<?php

namespace App\Services\Contracts;

interface LeagueServiceInterface
{
    public function processControl($request);
    public function add($data);
    public function getLeagueBySportId($id);
    public function getLeagueTypes();
    public function getSeasons();
    public function all();
    public function delete($id);
    public function update($data);
}
