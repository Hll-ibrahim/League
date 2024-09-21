<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('leagues.index');
});

Route::get('/soccer', function () {
    return view('soccer.team.detail');
});

Route::get('/myLogin', function () {
    return view('auth._soccer_shop-login');
});

Route::post('register',[UserController::class,'register'])->name('register');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
