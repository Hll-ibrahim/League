<?php

namespace App\Repositories\Contracts;

use App\Models\Game;
use App\Models\User;

interface GameRepositoryInterface extends BaseRepositoryInterface{

    function getGamesWithNames(Game $game);
    function getGamesFromSeasonLeague(int $season_id, int $league_id);

    function start(int $game_id);
    function lastGames(int $limit);


}
