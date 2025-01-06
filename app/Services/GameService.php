<?php


namespace App\Services;
use App\Repositories\Contracts\GameRepositoryInterface;
use App\Services\Contracts\GameServiceInterface;

class GameService implements GameServiceInterface {

    protected $gameRepository;

    function __construct(GameRepositoryInterface $gameRepository) {
        $this->gameRepository = $gameRepository;
    }

    public function processControl($request){
        switch ($request['process']) {
            case '1'://C
                return $this->add($request);
            case '2'://R
                return $this->all();// get all
            case '2.01'://R
                return $this->get($request->id);// get by Id
            case '2.02'://R
                return $this->getGames($request->user);// get by Id
            case '3'://U
                return $this->update($request);
            case '4'://D
                return $this->delete($request['id']);
            default:
                throw new \Exception("Invalid request type");
        }
    }

    public function getGames($user){
        $games = $this->gameRepository->getGames($user);
        $matches = [];
        foreach ($games as $game) {
            $match = $this->gameRepository->getGamesWithNames($game);
            array_push($matches, $match);
        }
        return response()->json([
            'success' => true,
            'matches' => $matches,
        ]);
    }

    public function getGame($id){
        return $this->gameRepository->getGame($id);
    }

    public function addHomeScore($game,$goal){
        return $this->gameRepository->setScore($game,$goal,'home');
    }

    public function addAwayScore($game,$goal){
        return $this->gameRepository->setScore($game,$goal,'away');
    }
    public function getGamesFromSeasonLeague(int $season_id,int $league_id){
        return $this->gameRepository->getGamesFromSeasonLeague($season_id,$league_id);
    }

}
