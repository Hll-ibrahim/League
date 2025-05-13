<?php

namespace App\Http\Controllers;


use App\Services\BaseService;

abstract class BaseController
{
    protected $service;

    public function __construct(BaseService $service){
        $this->service = $service;
    }
}
