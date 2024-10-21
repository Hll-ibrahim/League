<?php

namespace App\Repositories\Contracts;

use App\Models\Game;
use App\Models\User;

interface GameRepositoryInterface{
    function getGames(User $referee);

    function getGamesWithNames(Game $game);
}
