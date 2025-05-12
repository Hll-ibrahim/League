<?php

namespace App\Http\Controllers;

use App\Services\Contracts\RequestServiceInterface;
use App\Services\RequestService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RequestController extends Controller
{
    protected $requestService;

    public function __construct(RequestService $requestService)
    {
        $this->requestService = $requestService;
    }


    public function handleRequest($request)
    {
        return $this->requestService->handleRequest($request);
    }
}
