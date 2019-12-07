@extends('layout')

@section('title')
 {{-- Perfil de Usuario {{ $usuario->name }} --}}
@endsection

@section('main')
  <main role="main" class="main">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <br>
          <h2> ¡Hola, {{ Auth::user()->name }}!</h2>
          <br>
          </div>
      </div>
    </div>
    <div class="container">
      <div class="nav-scroller py-1 mb-2">
      <nav class="nav d-flex justify-content-between">
      <div class="row">
        <ul class="nav nav-tabs ">
            <li class="nav-item">
              <a class="nav-link active" href="/cuenta">Mi cuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/perfil_datos">Datos personales</a>
            </li>

        </ul>
      </div>
    </nav>
    </div>
    </div>
<!-- Aca es donde va la magia del php para cargar distintas paginas segun el nav -->
    <div class="container border mt-2 mb-1">
      <div class="row mt-2 mb-1">
        <div class="col">
          <h2 class="pedido mt-2">Mi pedido</h2><br>
          <p>Tu compra total es de $....</p>
        <hr class="featurette-divider">
        </div>
      </div>
      <div class="row m-0 mt-2">
              <div class="card w-50">
            <div class="card-body">
              <h5 class="card-title">Producto 1</h5>
              <p class="card-text">Descrpción</p>
              <p class="card-text">Precio: $1000</p>
              <a href="" class="btn btn-primary">Quitar del Carrito</a>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary btn-lg btn-block mt-3 mb-3">Confirmar Compra<ion-icon name="cart"></ion-icon></ion-icon></button>
        </div>
      </div>
    </div>



    <!-- SEGUIMIENTO PEDIDO -->
    <div class="container">
      <div class="row">
        <div class="col">
          <hr class="featurette-divider">
        </div>
      </div>
    </div>
    <!-- RECOMENDACION -->

    <!-- ENCUESTA -->
  </main>



{{-- <main class="container">
  <h1>Detalle del producto "{{ $usuario->name }}"</h1>
    <div class="container">
    <div class="row">
      <div class="col-sm">
          <img src="{{"/public $usuario->avatar }}">

      </div> --}}

  @endsection
