<?php

namespace App\Repositories;

use App\Models\Team;
use App\Repositories\Contracts\TeamRepositoryInterface;

class TeamRepositoryMysql extends BaseRepositoryMysql implements TeamRepositoryInterface{

    public function __construct(Team $model){
        parent::__construct($model);
    }

    public function getTeams(){
        return $this->model->all();
    }

}
