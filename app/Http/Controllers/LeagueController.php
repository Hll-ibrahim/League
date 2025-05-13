<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeagueRequest;
use App\Services\LeagueService;
use App\Services\RequestService;
use App\Services\SeasonService;
use App\Services\SportService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LeagueController extends Controller
{
    protected $leagueService;

    protected $sportService;
    protected $seasonService;
    public function __construct(LeagueService $leagueService , SeasonService $seasonService , SportService $sportService) {
        $this->leagueService = $leagueService;
        $this->seasonService = $seasonService;
        $this->sportService = $sportService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index($league_id){
        return view('team.index',compact('league_id'));
    }

    public function fetch(Request $request){
        $leagues = $this->leagueService->getLeagueBySportId($request['sport_id']);
        return DataTables::of($leagues)
            ->editColumn('season_id', function ($league) {
                $request=new Request();

                $seasonName = $this->seasonService->getSeasonNameById($request->get('id'));
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
                ]);
                $leagueTypeName = $this->leagueService->getLeagueNameById($request->get('id'));
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
                    //. $leagues->season_id . ', '
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
        ]);
        $league = $this->leagueService->getById($request->id);
        $seasons = $this->seasonService->all();
        $sports = $this->sportService->all();
        $league_types = $this->leagueService->getLeagueTypes();
        return view('league.detail',compact('league','seasons','sports','league_types'));
    }

    public function create(LeagueRequest $request){
        $this->leagueService->add($request->all());
        return response()->json(['success'=>'Data added successfully.']);
    }

    public function delete(LeagueRequest $request){
        $this->leagueService->delete($request['id']);
        return response()->json(['success'=>'Data deleted successfully.']);
    }

    public function get(Request $request){// ??
        dd($request->all());
        $league = $this->leagueService->get($request->sport_id);
        return response()->json($league);
    }

    public function update(LeagueRequest $request){
        $this->leagueService->update($request);
        return response()->json(['success'=>'Data updated successfully.']);
    }

    public function getSeasons(Request $request){
        $seasons = $this->leagueService->getSeasons();

        if ($seasons) {
            return response()->json($seasons); // JSON formatında döndür
        }

        return response()->json(['error' => 'No seasons found'], 404);
    }

    public function getLeagueTypes(){
        $leagueTypes = $this->leagueService->getLeagueTypes();

        if ($leagueTypes) {
            return response()->json($leagueTypes); // JSON formatında döndür
        }

        return response()->json(['error' => 'No League Type found'], 404);
    }

    public function start(Request $request){
        $league_id = $request->league_id;

        return $this->leagueService->start($league_id);

    }
}
