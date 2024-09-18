<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;

    function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function register(UserRequest $request){
        $user = $this->userService->add($request->all());
        return response()->json($user);
    }
}
