<?php

namespace App\Services;

use App\Repositories\Contracts\SportRepositoryInterface;
use App\Repositories\SportRepository;
use App\Services\Contracts\SportServiceInterface;

class SportService implements SportServiceInterface {

    protected $sportRepository;

    function __construct(SportRepositoryInterface $sportRepository) {
        $this->sportRepository = $sportRepository;
    }

    public function processControl($request)
    {
        switch ($request->input('process')) {
            case '1'://C
                return $this->add($request);
            case '2'://R
                return $this->get($request->id());
            case '3'://U
                return $this->all();
            case '4'://D
                return $this->delete($request->id());
            default:
                throw new \Exception("Invalid request type");
        }
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
