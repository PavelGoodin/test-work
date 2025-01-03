<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardGameController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/boardgames/create', [BoardGameController::class, 'create'])
  ->name('boardgame.create');

  Route::get('/boardgames', [BoardGameController::class, 'index'])
  ->name('boardgames.index');
