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

  Route::get('/boardgames/search', [BoardGameController::class, 'search'])
  ->name('boardgames.search');

  Route::post('/boardgames/add_game', [BoardGameController::class, 'store'])
  ->name('boardgames.add');