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

    <div class="container border mt-2 mb-1">
      <div class="row mt-2 mb-1">
        <div class="col">
          <h2 class="pedido mt-2">Mi pedido</h2><br>
          {{-- @php
            for ( $carrito as $flag){
            $resultado = $flag->precio

            }
          @endphp --}}
           <p>Tu compra total es de $
             {{-- @php
              dd($carrito);
             @endphp --}}

          </p>
        <hr class="featurette-divider">
        </div>
      </div>

    <div class="col 12">
            @foreach ($carrito as $flag)
                <div class="row m-0 mt-1">
                <div class="card w-50">
                <div class="card-body">
                <h5 class="card-title">Producto {{ $flag->name }} </h5>
                <div class="col-sm">
                  <img src="{{ $flag->image_url }}" width="125"alt="Chomba colegial">
                </div>
                  <p class="card-text">Precio ${{ $flag->precio }}</p>
                    <a href="" class="btn btn-primary">Quitar del carrito</a>
                </div>
                </div>
                  </div>
              @endforeach

            </div>

      {{-- <div class="container">
        <div class="row">
            @foreach ($productos as $producto)
            <a href="/productos/{{ $producto->id }}" class="col-12 col-md-4 col-lg-3 mb-4">
              <div class="card">
                @if ($producto->image_url)
                <img src="{{ $producto->image_url }}" class="card-img-top" alt="{{ $producto->name }}">
                <div class="card-body">
                  <p class="card-text">{{ $producto->name }}</p>
                </div>
              @else
                <img src="/storage/{{$producto->image_url}}" class="card-img-top" alt="{{ $producto->name }}">
                <div class="card-body">
                  <p class="card-text">{{ $producto->name }}</p>
                </div>
              @endif
              </div>
            </a>
          @endforeach
          </div>
      </div> --}}


      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-primary btn-lg btn-block mt-3 mb-3">
            Confirmar compra <ion-icon name="cart"></ion-icon>
          </button>
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

