@extends('layout')

@section('title')
 Perfil de Usuario {{ Auth::user()->name }}
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
            <li class="nav-item">
              <a class="nav-link" href="/compras">Compras</a>
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
                  <img src="/storage/{{$flag->image_url}}" class="card-img-top">

                </div>
                  <p class="card-text">Precio ${{ $flag->precio }}</p>
                  <form action="/borrarCarrito" method="POST">
                  {{csrf_field()}}
                  <input type="hidden" name="id" value="{{$flag->id}}">
                  <input type="submit"class="btn btn-primary"  name="" value="Sacar del Carrito">
                </form>
                </div>
                </div>
                  </div>
              @endforeach
            </div>
      <div class="row">
        <div class="col">
          <form action="/robo" method="post">
                    {{ csrf_field() }}
                    <button class="btn btn-primary btn-lg btn-block mt-3 mb-3" type="submit">Comprar Ahora<ion-icon name="cart"></button>
                  </form>
        </div>
      </div>
    </div>
  </main>
  @endsection
