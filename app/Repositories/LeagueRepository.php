<?php

namespace App\Repositories;

use App\Models\League;
use App\Models\Season;
use App\Models\Sport;
use App\Repositories\Contracts\LeagueRepositoryInterface;

class LeagueRepository implements LeagueRepositoryInterface {
    public function createLeague($data){
        return League::create($data);
    }
    public function getLeagues(){
        return League::all();
    }
    public function getLeagueById($id){
        return Sport::findOrFail($id);
    }
    public function getSeasons(){
        return Season::all();
    }
    public function update(League $league,$data){
        return $league->update($data);
    }
    public function delete($id){
        return Sport::destroy($id);
    }
}
