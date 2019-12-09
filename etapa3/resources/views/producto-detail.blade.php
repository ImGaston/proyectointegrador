@extends('layout')

@section('title')
  {{ $producto->name }} - Digital House Market
@endsection

@section('main')

<br>


  <main class="container">
  <h1>{{ $producto->name }}</h1>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <img src="{{ $producto->image_url }}" width="250"alt="Chomba colegial">

        </div>
  <div class="col-sm">
  <p>{{ $producto->description }}</p>

    </div>
        <div class="col-sm">

          <h2>Selección de talles </h2>
          <select>
              <option value="-1"> Seleccionar Talle</option>
              @foreach ($TalleMenu as $talle)
                <option value="{{$talle->id}}">{{$talle->name}}</option>
              @endforeach
            </select>
          </select>
          <br>
          <br>


          <form action="/agregarAlCarrito" method="post">
                      {{csrf_field()}}
                      @auth
                      <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                      <input type="hidden" name="product_id" value="{{$producto -> id}}">
                      <button type="submit" class="btn btn-primary">
                        Agregar al carrito
                      </button>
                      @endauth
                      </form>

    </div>






      </div>



<br>

    </div>

@endsection
