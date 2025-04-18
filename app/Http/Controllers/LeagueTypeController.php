<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeagueTypeController extends Controller
{
    public function index(){

        return view('admin.league_types.index');
    }
}
