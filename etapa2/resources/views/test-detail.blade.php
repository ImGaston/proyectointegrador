@extends('layout')

@section('title')
  Detalle de Producto {{ $producto->descripcion }}
@endsection

@section('main')
  <br>
  <div class="text-center">


  <h1>Estás en el detalle del producto "{{ $producto->descripcion }}"</h1>
  <p>Precio: {{ $producto->precio }}</p>
  <p>Cantidad: {{ $producto->cantidad }}</p>
  <p>Caterogia id: {{ $producto->categoria_id }}</p>
  <p>Caterogia id: {{ $producto->prenda_id }}</p>
  <p>Caterogia id: {{ $producto->talle_id }}</p>

  </div>
  <br>
  @endsection
