<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BoardGame;
use App\Models\Category;
use App\Models\Company;

class BoardGameController extends Controller
{

    // Вывод формы добавления игры
    public function create()
    {
        // Передаем в шаблон коллекции.(игры,компании,категории)
        $board_game = BoardGame::all();
        $companies = Company::all();
        $categories = Category::all();
        return view('creatgame', compact('board_game','companies','categories'));

    }

    // Вывод всех игр
    public function index()
    {
        //Получаем все игры
        $board_games = BoardGame::where('hide','0')->get();
        $companies = Company::all();
        $company_id = 0;
        return view('tablegames', compact('board_games','companies','company_id'));

    }

    // Поиск по компании локализации
    public function search(Request $request)
    {
        $company_id = $request->input('company_id');
        if($company_id==0){  $board_games = BoardGame::where('hide','0')->get();  }
        else {
        //Ищем игры по company_id
        $board_games = BoardGame::where('company_id',$request->input('company_id'))->get();
        }
        $companies = Company::all();
        
        return view('tablegames', compact('board_games','companies','company_id'));

    }
    
    public function store(Request $request)
    {
        //dd($request);

        $board_game = new BoardGame();
        $categories = Category::all();
        $board_game->name = $request->input('InputName');
        $board_game->description = $request->input('InputDescription');
        $board_game->min_number_of_players = 1;
        $board_game->max_number_of_players = 4;
        $board_game->age_of_players = 12;
        $board_game->play_time = 30;
        $board_game->company_id = $request->input('company_id'); 
        $board_game->foto = 'simple.png';
        $board_game->rating = 5.0;
        $board_game->save();

        //Добавляем выбранные категории
        foreach($categories as $category)
        {
        if( !empty($request->input("category_".$category->id)) )$board_game->categories()->attach($request->input("category_".$category->id)); 
        }
        return view('tablegames');

    }

    public function hide($id)
    {
        //ищем игру по id
        $board_game = BoardGame::find($id);
        //если нашли, то скрываем
        if ($board_game) {
            $board_game->hide = 1;
            $board_game->save();
        }
    return redirect()->route('boardgames.index');
    }



}
