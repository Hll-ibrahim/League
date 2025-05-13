<?php


namespace App\Services;
use App\Repositories\Contracts\GameRepositoryInterface;

class GameService extends BaseService {


    function __construct(GameRepositoryInterface $gameRepository) {
        parent::__construct($gameRepository);
    }

    public function getGames($user){
        $games = $this->repository->getGames($user);
        $matches = [];
        foreach ($games as $game) {
            $match = $this->repository->getGamesWithNames($game);
            array_push($matches, $match);
        }
        return response()->json([
            'success' => true,
            'matches' => $matches,
        ]);
    }

    public function getGame($id){
        return $this->repository->getGame($id);
    }

    public function addHomeScore($game,$goal){
        return $this->repository->setScore($game,$goal,'home');
    }

    public function addAwayScore($game,$goal){
        return $this->repository->setScore($game,$goal,'away');
    }
    public function getGamesFromSeasonLeague(int $season_id,int $league_id){
        return $this->repository->getGamesFromSeasonLeague($season_id,$league_id);
    }

}
