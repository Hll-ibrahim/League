<?php

use App\Http\Controllers\LeagueController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('sport')->name('sport.')->controller(SportController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/fetch', 'fetch')->name('fetch');
    Route::get('/detail/{id}', 'detail')->name('detail');
    Route::post('/create', 'create')->name('create');
    Route::delete('/delete', 'delete')->name('delete');
    Route::get('/get', 'get')->name('get');
    Route::post('/update', 'update')->name('update');

    Route::prefix('league')->name('league.')->controller(LeagueController::class)->group(function () {
        Route::post('/create', 'create')->name('create');
        Route::get('/fetch', 'fetch')->name('fetch');
        Route::get('/detail/{id}', 'detail')->name('detail');

        Route::prefix('team')->controller(TeamController::class)->name('team.')->group(function () {
            Route::get('/fetch', 'fetch')->name('fetch');
            Route::get('/', 'index')->name('index');
        });

    });
});



Route::get('/soccer', function () {
    return view('team.index');
});

Route::get('fetch',[TeamController::class,'fetch'])->name('fetch');
Route::get('detail/{id}',[TeamController::class,'detail'])->name('detail');

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
