<?php

namespace App\Repositories\Contracts;

interface SeasonLeagueRepositoryInterface extends BaseRepositoryInterface
{
    public function getByForeign($league_id,$season_id);

    public function start($season_league_id);
}
