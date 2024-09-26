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

    public function fetch(){
        $request = new Request();

        $request->merge([
            'type' => 3, // Örnek type değeri
            'process' => 3 // Örnek process değeri
        ]);

        $sports = $this->handleRequest($request);
        return DataTables::of($sports)
            ->addColumn('detail',function($sport){
                return '<a href="'.route('sport.detail',$sport->id).'" class="btn btn-info btn-xs">Detail</a>';
            })
            ->addColumn('delete',function($sport){
                return '<button onclick="deleteSport('.$sport->id.')" class="btn btn-danger btn-xs">Delete</button>';
            })
            ->addColumn('update',function($sport){
                return '<button onclick="updateSport('.$sport->id.')" class="btn btn-warning btn-xs">Update</button>';
            })
            ->addIndexColumn()
            ->rawColumns(['detail','delete','update'])
            ->make();
    }

    public function handleRequest($request)
    {
        return $this->requestService->handleRequest($request);
    }
}
