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

    public function index(){
        return view('sport.index');
    }

    public function fetch($request){
        if (!$request->has('type') || !$request->has('process')) {
            return response()->json(['error' => 'Missing parameters'], 400);
        }

        $sports = $this->requestService->handleRequest($request);

        return DataTables::of($sports)
            ->addColumn('detail', function ($sport) {
                return '<a href="'.route('sport.detail', $sport->id).'" class="btn btn-info btn-xs">Detail</a>';
            })
            ->addColumn('delete', function ($sport) {
                return '<button onclick="deleteSport('.$sport->id.')" class="btn btn-danger btn-xs">Delete</button>';
            })
            ->addColumn('update', function ($sport) {
                return '<button onclick="updateSport('.$sport->id.')" class="btn btn-warning btn-xs">Update</button>';
            })
            ->addIndexColumn()
            ->rawColumns(['detail', 'delete', 'update'])
            ->make(true); // true ile JSON formatında yanıt döner
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
