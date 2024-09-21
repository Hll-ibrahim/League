<?php

namespace App\Http\Controllers;

use App\Models\League;
use App\Services\LeagueService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LeagueController extends Controller
{
    protected $leagueService;
    public function __construct(LeagueService $leagueService){
        $this->leagueService = $leagueService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('league.index');
    }

    public function fetch(Request $request){
        $leagues = $this->leagueService->all();

        if(isset($request->sport_id)){
            $leagues = $this->leagueService->get_leagues_from_sport($request->sport_id);
        }
        return DataTables::of($leagues)
            ->addColumn('detail',function($league){
                return '<a href="'.route('sport.league.detail',$league->id).'" class="btn btn-info btn-xs">Detail</a>';
            })
            ->editColumn('season_id',function($league){
                return $league->season->name;
            })
            ->addIndexColumn()
            ->rawColumns(['detail'])
            ->make();
    }


    public function detail($id){
        $league = $this->leagueService->get($id);
        return view('league.detail',compact('league'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(League $league)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(League $league)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, League $league)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(League $league)
    {
        //
    }
}
