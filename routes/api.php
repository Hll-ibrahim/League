<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::group([], function () {
    Route::post('login',[UserController::class,'login']);
    Route::post('register',[UserController::class,'register']);
});

Route::group([], function () {
    Route::get('getMatches',[\App\Http\Controllers\GameController::class,'getMatches'])->name('referee')->middleware('auth:sanctum');
    Route::post('setScore',[\App\Http\Controllers\GameController::class,'setScore'])->name('setScore');

});
