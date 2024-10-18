<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{

    protected $userService;
    function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function register(RegisterRequest $request){
        $user = $this->userService->add($request->all());

        // Başarılı kayıt sonrası cevap dön
        return response()->json([
            'user' => $user,
            'message' => 'Successfully Registered. Please Log in'
        ]);
    }

    public function login(LoginRequest $request){
        $credentials = $request->only('email', 'password');

        if (auth()->attempt($credentials)) {

            $user = auth()->user();

            // İsterseniz bir API token veya JWT döndürebilirsiniz
            return response()->json([
                'success' => true,
                'message' => 'Login successful',
                'user' => $user,
                'token' => $user->createToken('YourApp')->accessToken, // API token kullanıyorsanız
            ]);
        }
        // Login başarısızsa hata döndür
        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials',
        ], 401);
    }
}
