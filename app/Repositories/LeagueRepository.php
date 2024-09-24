<?php

namespace App\Repositories;

use App\Models\League;
use App\Repositories\Contracts\LeagueRepositoryInterface;

class LeagueRepository implements LeagueRepositoryInterface {
    public function getLeagues(){
        return League::all();
    }

    public function queryLeagues(){
        return League::query();
    }

    public function getLeagueById($id){
        return League::findOrFail($id);
    }
}
