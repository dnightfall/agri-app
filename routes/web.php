<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeedlingController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('seedlings', SeedlingController::class);
