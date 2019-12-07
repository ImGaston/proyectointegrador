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



<a href="/agregarAlCarrito">
  <button type="submit" class="btn btn-primary">Agregar al carrito</button>
</a>
    </div>



      </div>

<br>

<div class="container center">



      <form action="/borrarproducto" method="POST">
      {{csrf_field()}}
      <input type="hidden" name="id" value="{{$producto->id}}">
      <input type="submit" name="" value="BORRAR">
    </form>
    </div>
    </div>

@endsection
