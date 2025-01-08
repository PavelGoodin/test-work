
@extends('welcome')
@section('content') 

<div class="container">
  <!-- Контент здесь -->


<form action = "{{route('boardgames.add')}}"  method="POST">
@csrf
  <div class="mb-3">
    <label for="InputName" class="form-label">Название игры</label>
    <input type="text" class="form-control" name="InputName">
  </div>


  <div class="mb-3">
    <label for="InputDescription" class="form-label">Краткое описание</label>
    <input type="text" class="form-control" name="InputDescription">
  </div>

  <div class="mb-3">
  <label class="form-label">Локализация</label>

  <select class="form-select" name="company_id" aria-label="Выберите фирму которая локализует">
  @foreach($companies as $company)
          <option value="{{ $company->id }}">{{ $company->name }}</option>
  @endforeach
  </select>
  
  </div>
  
  @foreach($categories as $category)
  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="{{$category->id}}" name="category_{{$category->id}}">
    <label class="form-check-label" for="flexCheckDefault">{{$category->name}}</label>
  </div>
  @endforeach

  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

</div>

@endsection