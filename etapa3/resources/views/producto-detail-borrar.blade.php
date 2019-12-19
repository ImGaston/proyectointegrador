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
            <img src="/storage/{{$producto->image_url}}" class="card-img-top">

        </div>
  <div class="col-sm">
  <p>{{ $producto->description }}</p>

    </div>
        <div class="col-sm">

                <br>
          <br>


          <div class="container center">



                <form action="/borrarproducto" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="id" value="{{$producto->id}}">
                <input type="submit"class="btn btn-primary"  name="" value="BORRAR">
              </form>
              </div>

    </div>



      </div>

<br>


    </div>

@endsection
