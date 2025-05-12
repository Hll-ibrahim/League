<?php

namespace App\Repositories;

use Dotenv\Repository\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;
    public function __construct(Model $model){
        $this->model = $model;
    }

    public function getAll(){
        return $this->model->all();
    }

    public function getById($id){
        return $this->model->find($id);
    }

    public function create(array $data){
        return $this->model->create($data);
    }
    public function update(array $data, $id){
        $data = $this->getById($id);
        return $data->update($data);
    }
    public function delete($id){
        return $this->getById($id)->delete();
    }
}
