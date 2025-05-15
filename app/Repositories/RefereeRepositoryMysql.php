<?php

namespace App\Repositories;

use App\Models\Referee;
use App\Repositories\Contracts\RefereeRepositoryInterface;

class RefereeRepositoryMysql extends BaseRepositoryMysql implements RefereeRepositoryInterface
{
    public function __construct(Referee $model)
    {
        parent::__construct($model);
    }

    public function in_random_order(){
        return $this->model->inRandomOrder()->value('id');
    }

}
