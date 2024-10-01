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
                return $this->get($request->id);// get by Id
            case '3'://U
                return $this->update($request);
            case '4'://D
                return $this->delete($request['id']);
            default:
                throw new \Exception("Invalid request type");
        }
    }

    public function add($data){
        return $this->leagueRepository->createSport($data);
    }
    public function get($id){
        return $this->leagueRepository->getSportById($id);
    }
    public function all(){
        return $this->leagueRepository->getSports();
    }
    public function delete($id){
        return $this->leagueRepository->delete($id);
    }

    public function update($data){
        $sport = $this->leagueRepository->getLeagueById($data['id']);
        return $this->leagueRepository->update($sport, $data->toArray());
    }
}
