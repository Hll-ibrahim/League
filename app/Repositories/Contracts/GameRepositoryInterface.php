<?php

namespace App\Repositories\Contracts;

use App\Models\Game;
use App\Models\User;

interface GameRepositoryInterface extends BaseRepositoryInterface{
    function getGames(User $referee);

    function getGamesWithNames(Game $game);
    function getGamesFromSeasonLeague(int $season_id, int $league_id);

}
