<?php

namespace App\Http\Controllers;

use App\Http\Requests\LeaguesTeamsRequest;
use App\Services\Contracts\LeagueServiceInterface;
use App\Services\Contracts\LeaguesTeamsServiceInterface;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class LeagueTeamController extends Controller
{
    protected $leaguesTeamsService, $leagueService;
    public function __construct(LeaguesTeamsServiceInterface $leaguesTeamsService, LeagueServiceInterface $leagueService){
        $this->leaguesTeamsService = $leaguesTeamsService;
        $this->leagueService = $leagueService;

    }

    public function add(LeaguesTeamsRequest $request){
        return $this->leaguesTeamsService->addTeamToLeague($request->all());
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
            })
            ->addColumn('delete',function($team){
                return '<button onclick="deleteLeague(' . $team->id . ')" class="btn btn-danger btn-xs">Remove</button>';

                //return '<a href="'.route('sport.league.team.delete',$team->id).'" class="btn btn-danger btn-xs">Remove</a>';
            })
            ->addIndexColumn()->rawColumns(['detail','delete'])
            ->make();
    }

    public function detail($id){
        dd($id);
    }

    public function fetchAvailable(Request $request){
        return $this->leagueService->getTeamsFromLeagueSport($request->league_id);
    }

    public function remove(Request $request){
        return $this->leaguesTeamsService->removeTeamFromLeague($request->league_team_id);
    }
}
