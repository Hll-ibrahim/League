<?php

namespace App\Services;

use App\Repositories\Contracts\SportRepositoryInterface;
use App\Repositories\SportRepositoryMysql;

class SportService extends BaseService  {


    function __construct(SportRepositoryInterface $sportRepository) {
        parent::__construct($sportRepository);
    }

    public function getSportName($id){
        return $this->repository->getSportName($id);
    }
}
