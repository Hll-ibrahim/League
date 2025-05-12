<?php

namespace App\Services;

use App\Repositories\LeagueRepository;

abstract class BaseService
{
    protected $repository;

    public function __construct(BaseRepositoryInterface $repository){
        $this->repository = $repository;
    }
}
