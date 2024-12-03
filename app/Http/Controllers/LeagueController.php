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
    public function index($league_id){
        return view('team.index',compact('league_id'));
    }

    public function fetch(Request $request){
        $request->merge([
            'type' => 2, // Örnek type değeri
            'process' => 2.01 // Örnek process değeri
        ]);
        $leagues = $this->requestService->handleRequest($request);
        /*
        if ($leagues->isEmpty()) {
            return response()->json(['error' => 'No leagues found'], 404);
        }
        */
        return DataTables::of($leagues)
            ->editColumn('season_id', function ($league) {
                $request=new Request();
                $request->merge([
                    'id' => $league->season_id,
                    'type' => 5,
                    'process' => 2.01
                ]);
                $seasonName = $this->requestService->handleRequest($request);
                if ($seasonName) {
                    return $seasonName; // Return the season name if found
                } else {
                    return 'Season not found'; // Return a default message if no season is found
                }
            })
            ->editColumn('league_type_id', function ($league) {
                $request=new Request();
                $request->merge([
                    'id' => $league->league_type_id,
                    'type' => 2,
                    'process' => 2.04
                ]);
                $leagueTypeName = $this->requestService->handleRequest($request);
                if ($leagueTypeName) {
                    return $leagueTypeName; // Return the season name if found
                } else {
                    return 'Season not found'; // Return a default message if no season is found
                }
            })
            ->addColumn('detail', function ($leagues) {
                return '<a href="' . route('sport.league.detail', $leagues->id) . '" class="btn btn-info btn-xs">Detail</a>';
            })
            ->addColumn('delete', function ($leagues) {
                return '<button onclick="deleteLeague(' . $leagues->id . ')" class="btn btn-danger btn-xs">Delete</button>';
            })
            ->addColumn('update', function ($leagues) {
                return '<button onclick="openUpdateModal('
                    . $leagues->id . ', \''
                    . $leagues->name . '\', \''
                    . $leagues->description . '\', '
                    . $leagues->sport_id . ', '
                    . $leagues->season_id . ', '
                    . $leagues->league_type_id
                    . ')" class="btn btn-warning btn-xs">Update</button>';
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

    public function getSeasons(Request $request){
        $seasons = $this->requestService->handleRequest($request);

        if ($seasons) {
            return response()->json($seasons); // JSON formatında döndür
        }

        return response()->json(['error' => 'No seasons found'], 404);
    }

    public function getLeagueTypes(Request $request){
        $leagueTypes = $this->requestService->handleRequest($request);

        if ($leagueTypes) {
            return response()->json($leagueTypes); // JSON formatında döndür
        }

        return response()->json(['error' => 'No League Type found'], 404);
    }
}
