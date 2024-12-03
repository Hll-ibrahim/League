<?php

namespace App\Http\Controllers;

use App\Services\Contracts\LeaguesTeamsServiceInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LeaguesTeamsController extends Controller
{
    protected $leaguesTeamsService;
    public function __construct(LeaguesTeamsServiceInterface $leaguesTeamsService){
        $this->leaguesTeamsService = $leaguesTeamsService;
    }

    public function index($league_id){
        return view('team.index',compact('league_id'));
    }

    public function fetch(Request $request){
        $teams = $this->leaguesTeamsService->getTeamsFromLeague($request->league_id);

        return DataTables::of($teams)
            ->addColumn('name',function($team){
                return $this->leaguesTeamsService->getTeamName($team);
            })
            ->addColumn('games',function($team){
                return $team->win + $team->lose + $team->draw ;
            })
            ->addColumn('point',function($team){
                return $this->leaguesTeamsService->getPoint($team);
            })
            ->addColumn('detail',function($team){
                return '<a href="'.route('detail',$team->id).'" class="btn btn-info btn-xs">Detail</a>';
            })->addIndexColumn()->rawColumns(['detail'])->make();
    }

    public function detail($id){
        dd($id);
    }
}
