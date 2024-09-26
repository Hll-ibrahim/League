<?php

namespace App\Http\Controllers;

use App\Services\Contracts\RequestServiceInterface;
use Illuminate\Http\Request;

class RequestController extends Controller
{
    protected $requestService;

    public function __construct(RequestServiceInterface $requestService)
    {
        $this->requestService = $requestService;
    }

    public function index(){
        return view('sport.index');
    }

    public function handleRequest(Request $request)
    {
        try {
            //gönderim işlemi burada başlatılıyor
            $response = $this->requestService->handleRequest($request);
            return response()->json($response);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 400);
        }
    }
}
