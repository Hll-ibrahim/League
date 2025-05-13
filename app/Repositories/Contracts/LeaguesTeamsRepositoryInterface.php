<?php

namespace App\Repositories\Contracts;

interface LeaguesTeamsRepositoryInterface extends BaseRepositoryInterface{
    function getBySeasonLeague(int $season_league_id);



}
