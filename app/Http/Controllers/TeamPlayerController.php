<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamPlayerController extends Controller
{
    public function index(int $team_id){
        return view('team.detail', compact('team_id'));
    }

    public function fetch(Request $request){

    }
}
