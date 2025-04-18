<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\LeagueController;
use App\Http\Controllers\LeagueTeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SeasonController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\TeamPlayerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LeagueTypeController;
use App\Http\Middleware\AddTypeAndProcess;
use Illuminate\Support\Facades\Route;

Route::prefix('/')->group(function () {

    Route::get('/', [HomepageController::class, 'index'])->name('league.index');

    Route::prefix('league/types')->controller(LeagueTypeController::class)->group(function(){
        Route::get('/','index')->name('league.types.index');
    });

    Route::prefix('sport')->name('sport.')->controller(SportController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/fetch', 'fetch')->name('fetch');
        Route::post('/create', 'create')->name('create');
        Route::delete('/delete', 'delete')->name('delete');
        Route::get('/get', 'get')->name('get');
        Route::post('/update', 'update')->name('update');
        Route::get('/name/fetch', 'getSportName')->name('name.fetch');

        Route::prefix('league')->name('league.')->controller(LeagueController::class)->group(function () {
            Route::post('/create', 'create')->name('create');
            Route::post('/start', 'start')->name('start');
            Route::get('/fetch', 'fetch')->name('fetch');
            Route::post('/update', 'update')->name('update');
            Route::delete('/delete', 'delete')->name('delete');
            Route::get('/type/fetch', 'getLeagueTypes')->name('type.fetch');
            Route::get('/detail/{id}', 'detail')->name('detail');

            Route::prefix('team')->controller(LeagueTeamController::class)->name('team.')->group(function () {
                Route::get('/fetch', 'fetch')->name('fetch');
                Route::get('/fetch_available', 'fetchAvailable')->name('fetch_available');
                Route::post('/add', 'add')->name('add');
                Route::delete('/delete', 'remove')->name('delete');
                Route::get('/{id}', 'index')->name('index');
                Route::get('/detail/{id}', 'detail')->name('detail');

                Route::prefix('player')->name('player.')->controller(TeamPlayerController::class)->group(function () {
                    Route::get('/fetch', 'fetch')->name('fetch');
                });
            });

            Route::prefix('game')->name('game.')->controller(GameController::class)->group(function () {
                Route::get('/fetch', 'fetch')->name('fetch');
                Route::get('detail/{id}', 'detail')->name('detail');
            });
        });

        Route::get('/league/{id}', 'detail')->name('detail');//sport/league/{id}

        Route::prefix('seasons')->name('season.')->controller(SeasonController::class)->group(function () {
            Route::get('/fetch', 'getSeasons')->name('fetch');
        });

    });


    Route::get('/soccer', function () {
        return view('team.index');
    });

    Route::get('fetch',[LeagueTeamController::class,'fetch'])->name('fetch');
    Route::get('detail/{id}',[TeamController::class,'detail'])->name('detail');

    Route::post('register',[UserController::class,'register'])->name('register');

    Route::get('hail',[\App\Http\Controllers\GameController::class,'getMatches'])->name('hail');

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
    });
});

