<?php

namespace App\Repositories;

use App\Models\Team;
use App\Repositories\Contracts\TeamRepositoryInterface;

class TeamRepository extends BaseRepository implements TeamRepositoryInterface{

    public function __construct(Team $model){
        parent::__construct($model);
    }

    public function getTeams(){
        return $this->model->all();
    }

}
