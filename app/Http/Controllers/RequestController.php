<?php

namespace App\Http\Controllers;

use App\Services\RequestService;

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
