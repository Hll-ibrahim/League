<?php

use App\Http\Controllers\Api\GameController;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([], function () {
    Route::post('login',[UserController::class,'login']);
    Route::post('register',[UserController::class,'register']);
});

Route::controller(GameController::class)->middleware('auth:sanctum')->group( function () {
    Route::get('get-matches','get_matches');
    Route::post('setScore','setScore')->name('setScore');
    Route::post('set-event','set_event');
});
