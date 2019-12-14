@extends('layout')

@section('title')
Pitagoras | ¡Gracias por tu contacto!
@endsection

@section('main')
  <div class="container text-center">
      <div class="row justify-content-md-center mt-4 mb-4">
          <div class="text-center">
          <h1>¡Gracias por tu contacto!</h1>
          <h2>¡Te responderemos a la brevedad!</h2>
              <!-- aca va el formulario -->
              </div>
          <div class="row justify-content-md-center mt-4 mb-4">
              <!-- aca va la imagen -->
              <img src="{{URL::asset("/img/thankyou.jpg")}}" class="img-thumbnail" alt="" style="width:50%">

          </div>
      </div>
  </div>

            @endsection
