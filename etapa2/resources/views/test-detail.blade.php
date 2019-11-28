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
  <br>
  <div class="text-center">
    <p>Y la foto de tu producto es esta:</p>

    <img src="/storage/{{$producto->foto}}" alt="">
  </div>
<br>
<br>
  <form action="/borrarproducto" method="POST">
  {{csrf_field()}}
  <input type="hidden" name="id" value="{{$producto->id}}">
  <input type="submit" name="" value="BORRAR">
</form>

  </div>
  <br>
  @endsection
