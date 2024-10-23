<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\SeasonRepositoryInterface;
use App\Services\Contracts\SeasonServiceInterface;
use App\Services\Contracts\RequestServiceInterface;
use Illuminate\Http\Request;

class SeasonController extends Controller
{
    protected $seasonService;
    protected $requestService;
    public function __construct(SeasonServiceInterface $leagueService , RequestServiceInterface $requestService) {
        $this->seasonService = $leagueService;
        $this->requestService = $requestService;
    }
}
