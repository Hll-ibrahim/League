<?php

namespace App\Services\Contracts;

interface LeaguesTeamsServiceInterface{
    function getTeamsFromLeague($leagueId);

    function getPoint($leagueTeam);

    function getPointConvert($leagueTeam, $type);

    function getTeamName($leagueTeam);

    function addTeamToLeague(array $leagueTeam);

    function removeTeamFromLeague(int $leagueTeam_id);

    public function getLeagueTeamsFromLeague(int $season_league_id);

}
