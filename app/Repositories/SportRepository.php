<?php

namespace App\Repositories;

use App\Models\Sport;
use App\Repositories\Contracts\SportRepositoryInterface;

class SportRepository implements SportRepositoryInterface {

    public function createSport($data){
        return Sport::create($data);
    }
    public function getSports(){
        return Sport::all();
    }

    public function getSportById($id){
        return Sport::findOrFail($id);
    }

    public function update(Sport $sport,$data){
        return $sport->update($data);
    }

    public function delete($id){
        return Sport::destroy($id);
    }

}
