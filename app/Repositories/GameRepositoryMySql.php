<?php

namespace App\Repositories;

use App\Models\Game;
use App\Models\User;
use App\Repositories\Contracts\GameRepositoryInterface;
use App\Services\Contracts\GameServiceInterface;

class GameRepositoryMySql implements GameRepositoryInterface {
    public function getGames($referee)
    {
        return $referee->refereeGames;
    }

    public function getGame($id){
        return Game::findOrFail($id);
    }

    public function getGamesWithNames($game)
    {
        $match = [];
        array_push($match, [
            'id' => $game->id,
            'home_team' => $game->home_team->name,
            'away_team' => $game->away_team->name,
            'home_score' => $game->home_score,
            'away_score' => $game->away_score,
            'date' => $game->date,
            'league' => $game->league->name
        ]);
        return $match;
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
}
