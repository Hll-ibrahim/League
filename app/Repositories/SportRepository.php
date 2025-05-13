<?php

namespace App\Repositories;

use App\Models\Sport;
use App\Repositories\Contracts\SportRepositoryInterface;

class SportRepository extends BaseRepository implements SportRepositoryInterface {

    public function __construct(Sport $model){
        parent::__construct($model);
    }

    public function createSport($data){
        return $this->model->create($data);
    }
    public function getSports(){
        return $this->model->all();
    }

    public function getSportById($id){
        return $this->model->findOrFail($id);
    }

    public function delete($id){
        return $this->model->destroy($id);
    }

    public function getSportName($id){
        $sportName = $this->model->findOrFail($id)->name;;

        if ($sportName) {
            return $sportName;
        }

        return response()->json(['error' => 'Sport not found'], 404);
    }

}
