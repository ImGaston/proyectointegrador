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

      @guest

        <div class="col-sm text-center">
          <h3>¿Querés comprar?</h3>
          <h2>Ingresá a tu cuenta!</h2>
      <a href="/login" class="button">Ingresar</a>

          </div>

          @endguest
        <div class="col-sm">
          <form action="/agregarAlCarrito" method="post" id="agregarProductoForm">
            {{csrf_field()}}
            @auth
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <input type="hidden" name="product_id" value="{{$producto -> id}}">
            <input type="hidden" name="name" value="{{$producto -> name}}">
            <input type="hidden" name="precio" value="{{$producto -> precio}}">
            <input type="hidden" name="image_url" value="{{$producto -> image_url}}">
            <button type="submit" class="btn btn-primary" />
              Agregar al carrito
            </button>
            @endauth
          </form>
    </div>

      </div>

<br>

    </div>

@endsection

@section('scripts')
<script src="/js/producto-detail.js"></script>
@endsection
