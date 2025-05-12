<?php

namespace App\Http\Controllers;

use App\Services\TeamPlayerService;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class TeamPlayerController extends Controller
{
    protected $teamPlayerService;
    public function __construct(TeamPlayerService $teamPlayerService){
        $this->teamPlayerService = $teamPlayerService;
    }
    public function index(int $team_id){
        return view('team.detail', compact('team_id'));
    }
    public function fetch(Request $request){
        $team_id = $request->team_id;

        $league_team = $this->teamPlayerService->getLeagueTeam($team_id);

        $players = $this->teamPlayerService->getPlayersFromTeam($team_id);


        return DataTables::of($players)
            ->addColumn('name',function($player){
                return $this->teamPlayerService->getPlayerFullName($player->id);
            })
            ->addColumn('played',function($player){
                return $this->teamPlayerService->getPlayedGames($player->id);
            })
            ->addColumn('goals',function($player){
                return $this->teamPlayerService->getGoalsInSeason($player->id);
            })
            ->addColumn('assists',function($player){
                return 1;
                return $this->teamPlayerService->getAssistsInSeason($player->id);
            })
            ->addColumn('detail',function($team){
                return '<a href="'.route('sport.league.team.detail',$team->id).'" class="btn btn-info btn-xs">Detail</a>';
            })
            ->addColumn('delete',function($team){
                return '<button onclick="deleteLeague(' . $team->id . ')" class="btn btn-danger btn-xs">Remove</button>';
            })
            ->addIndexColumn()->rawColumns(['detail','delete'])
            ->make();
    }

}
