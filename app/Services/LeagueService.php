<?php

namespace App\Services;

use App\Repositories\LeagueRepository;
use App\Services\Contracts\ServiceInterface;

class LeagueService implements ServiceInterface {

    protected $leagueRepository;

    function __construct(LeagueRepository $leagueRepository) {
        $this->leagueRepository = $leagueRepository;
    }

    public function add($data){}
    public function get($id){
        return $this->leagueRepository->getLeagueById($id);
    }
    public function all(){
        return $this->leagueRepository->getLeagues();
    }
    public function delete($id){}

    public function get_leagues_from_sport($sport_id){
        return $this->leagueRepository->queryLeagues()->where('sport_id', $sport_id)->get();
    }
}
