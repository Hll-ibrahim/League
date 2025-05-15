<?php

namespace App\Services;

use App\Repositories\Contracts\LeagueRepositoryInterface;
use App\Repositories\Contracts\LeaguesTeamsRepositoryInterface;
use App\Repositories\Contracts\SportRepositoryInterface;
use App\Repositories\LeagueRepository;

class LeagueService extends BaseService {

    function __construct(LeagueRepositoryInterface $leagueRepository) {
        parent::__construct($leagueRepository);
    }

    public function add($data){
        return $this->repository->createLeague($data);
    }
    public function getLeagueBySportId($id){
        return $this->repository->getLeagueBySportId($id);
    }
    public function all(){
        return $this->repository->getLeagues();
    }


    public function getSeasons(){
        return $this->repository->getSeasons();
    }
    public function getLeagueTypes(){
        return $this->repository->getLeagueTypes();
    }

    public function getLeagueNameById($id){
        return $this->repository->getLeagueNameById($id);
    }

    public function getTeamsFromLeagueSport(int $league_id){
        $league = $this->repository->getLeagueById($league_id);
        return $this->repository->getTeamsFromSport($league->sport_id,$league_id);
    }

}
