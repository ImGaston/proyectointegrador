@extends('layout')

@section('title')
Pitagoras | Alta de Categorias
@endsection

@section('main')
<div class="container">

  <h1 class="my-4">Categorías</h1>
  <ul>
    @foreach ($categoryMenu as $flag)
    <li>
      {{ $flag->name }}
      </a>
    </li>
    @endforeach
  </ul>
  <ul class="errores">
  @foreach ($errors->all() as $error)
    <li>
      {{$error}}
    </li>
    @endforeach
</ul>

</div>
  <form class="col-md-4 mx-auto" action="/altacategoria" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class= "container align-items-center">
    <fieldset>
        <legend class="text-center header">Alta de la nueva categoría</legend>
      <br>

      <div class="form-group">
      <label for="descripcion">Nombre de la Categoría</label>
      <input id = "name" type="text" placeholder="Ingresa el nombre"
      name="name" class="form-control"  value=""  >
      </div>
      <div class="form-group text-center">
      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary btn-lg">Enviar</button>
          </div>
      </div>
      </div>
      </fieldset>
  </form>
  @endsection
