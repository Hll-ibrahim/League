<?php

namespace App\Services;

use App\Repositories\Contracts\LeagueRepositoryInterface;
use App\Repositories\Contracts\SportRepositoryInterface;
use App\Repositories\LeagueRepository;
use App\Services\Contracts\LeagueServiceInterface;

class LeagueService implements LeagueServiceInterface {

    protected $leagueRepository;

    function __construct(LeagueRepositoryInterface $leagueRepository) {
        $this->leagueRepository = $leagueRepository;
    }

    public function add($data){
        return $this->leagueRepository->createLeague($data);
    }
    public function getLeagueBySportId($id){
        return $this->leagueRepository->getLeagueBySportId($id);
    }
    public function all(){
        return $this->leagueRepository->getLeagues();
    }
    public function delete($id){
        return $this->leagueRepository->delete($id);
    }

    public function update($data){
        $sport = $this->leagueRepository->getLeagueById($data['id']);
        return $this->leagueRepository->update($sport, $data->toArray());
    }
    public function getSeasons(){
        return $this->leagueRepository->getSeasons();
    }
    public function getLeagueTypes(){
        return $this->leagueRepository->getLeagueTypes();
    }

    public function getLeagueNameById($id){
        return $this->leagueRepository->getLeagueNameById($id);
    }

    public function getTeamsFromLeagueSport(int $league_id){
        $league = $this->leagueRepository->getLeagueById($league_id);
        return $this->leagueRepository->getTeamsFromSport($league->sport_id,$league_id);
    }

    public function start(int $league_id){

    }

}
