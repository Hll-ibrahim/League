<?php

namespace App\Repositories;

use App\Models\League;
use App\Models\Sport;
use App\Repositories\Contracts\LeagueRepositoryInterface;

class LeagueRepository implements LeagueRepositoryInterface {
    public function createSport($data){
        return Sport::create($data);
    }
    public function getLeagues(){
        return League::all();
    }
    public function getLeagueById($id){
        return Sport::findOrFail($id);
    }
    public function update(League $league,$data){
        return $league->update($data);
    }
    public function delete($id){
        return Sport::destroy($id);
    }
}
