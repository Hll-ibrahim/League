<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\Contracts\ServiceInterface;

class UserService implements ServiceInterface{

    protected $userRepository;

    function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }

    public function add($data){
        return $this->userRepository->add($data);
    }

    public function get($id){}

    public function delete($id){}

    public function all(){

    }
}
