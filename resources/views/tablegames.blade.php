@extends('welcome')
@section('content') 

<table class="table table-striped table-dark">
<thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Название</th>
      <th scope="col">Краткое описание</th>
      <th scope="col">Фото</th>
      <th scope="col">Рейтинг</th>
      <th scope="col">Категории</th>
      <th scope="col">Локализация</th>
    </tr>
  </thead>
  <tbody>
    @foreach($board_games as $board_game)
  
    <tr>
      <th scope="row">{{$board_game->id}}</th>
      <td>{{$board_game->name}}</td>
      <td>{{$board_game->description}}</td>
      <td><img src='{{ asset("resources/img/boardgames/$board_game->foto")}}'  alt="нет фото" width="150px" height="150px"></td>
      <td>{{$board_game->rating}}</td>
      <td>@foreach($board_game->categories as $category){{$category->name}}<br>@endforeach</td>
      <td>{{$board_game->company->name}}</td>


    </tr>

    @endforeach
    </tbody>
    </table>
@endsection