<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository{
    public function add($data){
        return User::create($data);
    }
}
