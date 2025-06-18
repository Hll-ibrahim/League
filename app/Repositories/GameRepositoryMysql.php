<?php

namespace App\Repositories;

use App\Models\Game;
use App\Models\SeasonLeague;
use App\Models\User;
use App\Repositories\Contracts\GameRepositoryInterface;
use Carbon\Carbon;

class GameRepositoryMysql extends BaseRepositoryMysql implements GameRepositoryInterface {

    public function __construct(Game $game){
        parent::__construct($game);
    }



    public function getGamesWithNames($game)
    {
        return [
            'id' => $game->id,
            'home_team' => $game->homeTeam->name,
            'away_team' => $game->awayTeam->name,
            'home_score' => $game->home_score,
            'away_score' => $game->away_score,
            'date' => $game->date,
            'league' => $game->seasonLeague->league->name
        ];
    }

    public function setScore($game, $score, $team){

        switch ($team) {
            case 'home':
                $game->home_score += $score;
                $game->save();
                break;
            case 'away':
                $game->away_score += $score;
                $game->save();
                break;
        }
        return $game;
    }

    public function getGamesFromSeasonLeague(int $season_id, int $league_id){
       $season_league = SeasonLeague::where('season_id',$season_id)->where('league_id',$league_id)->first();
       if(isset($season_league)){
           $games = $season_league->games;
       }else{
           $games = [];
       }
       return $games;
    }

    public function start(int $game_id){
        $game = $this->getById($game_id);
        $game->status = 'started';
        $game->started_at = Carbon::now();
        $game->save();
        return $game;
    }

    function lastGames(int $limit)
    {
        return $this->model->with(['homeTeam.leagueTeam.team', 'awayTeam.leagueTeam.team'])
            ->where('status', 'started')
            ->orderBy('date', 'desc')
            ->take(5);
    }
}
