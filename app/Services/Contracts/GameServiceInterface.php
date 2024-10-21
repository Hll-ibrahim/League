<?php

namespace App\Services\Contracts;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;

interface GameServiceInterface{
    function getGames(User $user);
    function processControl(Request $request);
}
