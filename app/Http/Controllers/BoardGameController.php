<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoardGame;

class BoardGameController extends Controller
{

    // Вывод формы
    public function create()
    {
        // Передаем в шаблон вновь созданный объект. Он нужен для вывода формы
        $board_game = new BoardGame();
        return view('creatgame', compact('board_game'));

    }

    // Вывод всех игр
    public function index()
    {
        //Получаем все игры
        $board_games = BoardGame::all();
        return view('tablegames', compact('board_games'));

    }



}
