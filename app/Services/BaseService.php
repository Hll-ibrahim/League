<?php

namespace App\Services;

use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\LeagueRepository;

abstract class BaseService
{
    protected $repository;

    public function __construct(BaseRepositoryInterface $repository){
        $this->repository = $repository;
    }

    public function getAll(){
        return $this->repository->getAll();
    }
    public function getById($id){
        return $this->repository->getById($id);
    }
    public function create($data){
        return $this->repository->create($data);
    }
    public function update($id,$data){
        return $this->repository->update($id,$data);
    }
    public function delete($id){
        return $this->repository->delete($id);
    }

    public function paginate($page){
        return $this->repository->paginate($page);
    }
}
