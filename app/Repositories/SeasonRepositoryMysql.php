<?php

namespace App\Repositories;

use App\Models\Season;
use App\Repositories\Contracts\SeasonRepositoryInterface;

class SeasonRepositoryMysql extends BaseRepositoryMysql implements SeasonRepositoryInterface
{
    public function __construct(Season $model){
        parent::__construct($model);
    }
    public function getSeasons(){
        return $this->model->all();
    }

    public function getSeasonNameById($id){
        $season = $this->model->find($id);
        return $season ? $season->name : null;
    }
}
