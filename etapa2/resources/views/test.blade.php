@extends('layout')

@section('title')
Listado de Productos
@endsection

@section('main')
  <br>
  <div class="text-center">
    <h1>Estás en el listado de Productos de la Base de Datos</h1>
  </div>
  <br>
  <div class="text-center">
  <ul>
    @foreach ($productos as $producto)
      <li><a href="/test/{{ $producto->id }}">{{ $producto->descripcion }} | {{ $producto->precio }}</a></li>
    @endforeach
  </ul>
  <br>
  <div class="text-center">
  <h2>  <a href="/altaproducto">Alta Productos</a> </h2>

  </div>

    </div>

@endsection
