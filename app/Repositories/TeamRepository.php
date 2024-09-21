<?php

namespace App\Repositories;

use App\Models\Team;

class TeamRepository{
    public function getTeams(){
        return Team::all();
    }

    public function getTeamById($id){
        return Team::findOrFail($id);
    }

    public function queryTeams(){
        return Team::query();
    }
}
