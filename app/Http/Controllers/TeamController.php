<?php

namespace App\Http\Controllers;

use App\Services\TeamService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TeamController extends Controller
{
    protected $teamService,$leaguesTeamsService;
    public function __construct(TeamService $teamService){
        $this->teamService = $teamService;
    }

    public function index(){
        return view('team.index');
    }

    public function fetch(Request $request){
        $teams = $this->teamService->getAll();

        if(isset($request->league_id)){
            $teams = $this->teamService->get_teams_from_leagues($request->league_id);
        }

        return DataTables::of($teams)
            ->addColumn('win',function($team){
                return $this->teamService->win_count($team->id);
            })
            ->addColumn('draw',function($team){
                return $this->teamService->draw_count($team->id);
            })
            ->addColumn('lose',function($team){
                return $this->teamService->lose_count($team->id);
            })
            ->addColumn('games',function($team){
                return $this->teamService->games_count($team->id);
            })
            ->addColumn('point',function($team){
                return $this->teamService->win_count($team->id)*3+$this->teamService->draw_count($team->id);
            })
            ->addColumn('detail',function($team){
                return '<a href="'.route('detail',$team->id).'" class="btn btn-info btn-xs">Detail</a>';
            })->addIndexColumn()->rawColumns(['detail'])->make();
    }

    public function detail($id){
        dd($id);
    }

}
