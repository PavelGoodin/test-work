@extends('welcome')
@section('content')

<select class="search-select" name="search_company" id="select_search" aria-label="Выберите фирму которая локализует">
            <option value='0'>Все игры</option>
             @foreach($companies as $company)
            <option value="{{ $company->id }}">{{ $company->name }}</option>
            @endforeach
        </select>

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
      <td><button type="button">
          <span class="icon-button"></span>
          удалить
          </button>
      </td>

    </tr>

    @endforeach

    </tbody>
    </table>

    <nav aria-label="Page navigation example">
    <ul class="pagination">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
    </ul>
    </nav>
@endsection