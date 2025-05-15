<?php

namespace App\Services;

use App\Repositories\Contracts\BaseRepositoryInterface;
use App\Repositories\Contracts\RefereeRepositoryInterface;

class RefereeService extends BaseService
{
    public function __construct(RefereeRepositoryInterface $repository)
    {
        parent::__construct($repository);
    }
}
