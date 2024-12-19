<?php

use App\Http\Controllers\AnimalController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('landing');
});

Route::resource('films', FilmController::class);
Route::resource('animals', AnimalController::class);
