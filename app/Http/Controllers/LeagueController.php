<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeagueRequest;
use App\Http\Requests\SportRequest;
use App\Models\League;
use App\Services\Contracts\LeagueServiceInterface;
use App\Services\Contracts\RequestServiceInterface;
use App\Services\Contracts\SportServiceInterface;
use App\Services\LeagueService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LeagueController extends Controller
{
    protected $leagueService;
    protected $requestService;
    public function __construct(LeagueServiceInterface $leagueService , RequestServiceInterface $requestService) {
        $this->leagueService = $leagueService;
        $this->requestService = $requestService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('league.index');
    }

    public function fetch(Request $request){
        // Validate and check required parameters
        $leagues = $this->requestService->handleRequest($request);

        if ($leagues->isEmpty()) {
            return response()->json(['error' => 'No leagues found'], 404);
        }

        return DataTables::of($leagues)
            ->addColumn('detail', function ($leagues) {
                return '<a href="' . route('sport.league.detail', $leagues->id) . '" class="btn btn-info btn-xs">Detail</a>';
            })
            ->addColumn('delete', function ($leagues) {
                return '<button onclick="deleteSport(' . $leagues->id . ')" class="btn btn-danger btn-xs">Delete</button>';
            })
            ->addColumn('update', function ($leagues) {
                return '<button onclick="openUpdateModal(' . $leagues->id . ', \'' . $leagues->name . '\', \'' . $leagues->description . '\')" class="btn btn-warning btn-xs">Update</button>';
            })
            ->addIndexColumn()
            ->rawColumns(['detail', 'delete', 'update'])
            ->make();
    }


    public function detail($id){
        $request = new Request();

        $request->merge([
            'id' => $id, // Aldığınız ID değeri
            'type' => 3, // Örnek type değeri
            'process' => 2.01 // Örnek process değeri
        ]);
        $league = $this->requestService->handleRequest($request);
        return view('league.detail',compact('league'));
    }

    public function create(LeagueRequest $request){
        $this->leagueService->add($request->all());
        return response()->json(['success'=>'Data added successfully.']);
    }

    public function delete(LeagueRequest $request){
        $this->requestService->handleRequest($request);
        return response()->json(['success'=>'Data deleted successfully.']);
    }

    public function get(Request $request){
        $league = $this->leagueService->get($request->sport_id);
        return response()->json($league);
    }

    public function update(LeagueRequest $request){
        $this->requestService->handleRequest($request);
        return response()->json(['success'=>'Data updated successfully.']);
    }
}
