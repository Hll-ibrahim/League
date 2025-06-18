<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryInterface;
use App\Repositories\UserRepositoryMysql;

class UserService {

    protected $userRepository;

    function __construct(UserRepositoryInterface $userRepository){
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
