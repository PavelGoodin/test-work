
@extends('welcome')
@section('content') 

<div class="container">
  <!-- Контент здесь -->


<form>
  <div class="mb-3">
    <label for="InputName" class="form-label">Название игры</label>
    <input type="text" class="form-control" id="InputName">
    <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
  </div>


  <div class="mb-3">
    <label for="InputDescription" class="form-label">Краткое описание</label>
    <input type="text" class="form-control" id="InputDescription">
  </div>

  <select class="form-select" aria-label="Выберите фирму которая локализует">
  <option selected>Локализация</option>
  <option value="1">Один</option>
  <option value="2">Два</option>
  <option value="3">Три</option>
</select>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Проверить меня</label>
  </div>
  <button type="submit" class="btn btn-primary">Сохранить</button>
</form>

</div>

@endsection