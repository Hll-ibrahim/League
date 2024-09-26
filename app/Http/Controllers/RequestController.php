<?php

namespace App\Http\Controllers;

use App\Services\Contracts\RequestServiceInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class RequestController extends Controller
{
    protected $requestService;

    public function __construct(RequestServiceInterface $requestService)
    {
        $this->requestService = $requestService;
    }


    public function handleRequest($request)
    {
        return $this->requestService->handleRequest($request);
    }
}
