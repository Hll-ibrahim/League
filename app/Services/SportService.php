<?php

namespace App\Services;

use App\Repositories\LeagueRepository;
use App\Repositories\SportRepository;

class SportService implements ServiceInterface{

    protected $sportRepository;

    function __construct(SportRepository $sportRepository) {
        $this->sportRepository = $sportRepository;
    }

    public function add($data){
        return $this->sportRepository->createSport($data);
    }
    public function get($id){
        return $this->sportRepository->getSportById($id);
    }
    public function all(){
        return $this->sportRepository->getSports();
    }
    public function delete($id){
        return $this->sportRepository->delete($id);
    }

    public function update($data){
        $sport = $this->sportRepository->getSportById($data['id']);
        return $this->sportRepository->update($sport, $data);
    }
}
