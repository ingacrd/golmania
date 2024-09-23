<?php

use App\Http\Controllers\FixtureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('api')->group(function () {
    Route::get('/fixtures', [FixtureController::class, 'index']);
});
