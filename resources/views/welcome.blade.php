<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Настольные Игры</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                .icon-button {
                background-image: url("../img/icon.svg");
                background-size: 90px 97px;
            }
            </style>
        @endif
    </head>
    <body>
    <br>
    <div class="d-grid gap-2 col-6 mx-auto">
        <a class="btn btn-primary" type="button" href="{{route('boardgames.index')}}">Все игры</a>
        <a class="btn btn-primary" type="button"  href="{{route('boardgame.create')}}">Добавить игру</a>
    </div>
    <br>

            <div>
            @yield('content')
        </div>
    </body>
    <script>
    let select = document.getElementById("select_search");
    console.log("{{$company_id}}");
    select["{{$company_id}}"].selected = true;
    //обработка select поиск по копаниям
    select.addEventListener("change", function(){
        console.log(select.value);
        const cleanUrl = `${window.location.origin}${window.location.pathname}`+ "/search";
        location.href = window.location.origin + "/test-work/test-work/public/boardgames/search?company_id="+select.value;
        })
    </script>
</html>
