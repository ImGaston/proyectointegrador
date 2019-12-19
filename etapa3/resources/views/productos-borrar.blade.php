@extends('layout')

@section('title')
Listado Completo Productos
@endsection

@section('main')

<div class="container text-center">
  <h1>Listado completo de productos</h1>
  <h2>Seleccione uno para borrar</h2>
</div>

<br>
  <div class="container">
    <div class="row">
        @foreach ($productos as $producto)
        <a href="/productos-borrar/{{ $producto->id }}" class="col-12 col-md-4 col-lg-3 mb-4">
          <div class="card">
            <img src="{{ $producto->image_url }}" class="card-img-top" alt="{{ $producto->name }}">
            <img src="/storage/{{$producto->image_url}}" class="card-img-top">
            <div class="card-body">
              <p class="card-text">{{ $producto->name }}</p>
            </div>
          </div>
        </a>
      @endforeach
    </div>
  </div>




  <br>


    </div>

@endsection
