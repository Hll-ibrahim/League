<?php

namespace App\Http\Controllers;

use App\Models\Referee;
use App\Services\RefereeService;
use Illuminate\Http\Request;

class RefereeController extends BaseController
{
    public function __construct(RefereeService $service){
        parent::__construct($service);
    }
}
