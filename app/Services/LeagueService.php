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

    public function processControl($request)
    {
        switch ($request['process']) {
            case '1'://C
                return $this->add($request);
            case '2'://R
                return $this->all();// get all
            case '2.01'://R
                return $this->getLeagueBySportId($request['sport_id']);// get leagues by sport id
            case '2.02'://R
                return $this->getSeasons();
            case '2.03'://R
                return $this->getLeagueTypes();
            case '2.04'://R
                return $this->getLeagueNameById($request->get('id'));
            case '3'://U
                return $this->update($request);
            case '4'://D
                return $this->delete($request['id']);
            default:
                throw new \Exception("Invalid request type");
        }
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


}
