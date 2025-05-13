<?php

namespace App\Services;

use App\Repositories\TeamRepository;

class TeamService extends BaseService {


    public function __construct(TeamRepository $teamRepository){
         parent::__construct($teamRepository);
    }


    public function games_count($team_id){
        $team = $this->repository->getById($team_id);
        return $team->home_games->count() + $team->away_games->count();
    }

    public function win_count($team_id){
        $count = 0;
        $team = $this->repository->getById($team_id);
        $home_games = $team->home_games;
        foreach($home_games as $game){
            if($game->home_score > $game->away_score){
                $count++;
            }
        }
        $away_games = $team->away_games;
        foreach($away_games as $game){
            if($game->home_score < $game->away_score){
                $count++;
            }
        }
        return $count;
    }

    public function draw_count($team_id){
        $count = 0;
        $team = $this->repository->getById($team_id);
        $home_games = $team->home_games;
        foreach($home_games as $game){
            if($game->home_score == $game->away_score){
                $count++;
            }
        }
        $away_games = $team->away_games;
        foreach($away_games as $game){
            if($game->home_score == $game->away_score){
                $count++;
            }
        }
        return $count;
    }

    public function lose_count($team_id){
        $count = 0;
        $team = $this->repository->getById($team_id);
        $home_games = $team->home_games;
        foreach($home_games as $game){
            if($game->home_score < $game->away_score){
                $count++;
            }
        }
        $away_games = $team->away_games;
        foreach($away_games as $game){
            if($game->home_score > $game->away_score){
                $count++;
            }
        }
        return $count;
    }

    public function get_teams_from_leagues($league_id){
        return $this->repository->query()->where('league_id', $league_id)->get();
    }
}
