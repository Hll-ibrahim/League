<?php

namespace App\Repositories;

use App\Models\League;

class LeagueRepository{
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
