@extends('layout')

@section('title')
Pitagoras | Gracias por Suscribirte a nuestro Newsletter!
@endsection

@section('main')
  <div class="container text-center">
      <div class="row justify-content-md-center mt-4 mb-4">
          <div class="text-center">
          <h1>¡Gracias por suscribirte a nuestro Newsletter!</h1>
              </div>
          <div class="row justify-content-md-center mt-4 mb-4">
  <img src="{{URL::asset("/img/newsletter.jpg")}}" class="img-thumbnail" alt="" style="width:50%">            </div>
          <div class="text-center">
          <h2>¡Estate atento a nuestras promociones!</h2>
            </div>
      </div>
  </div>

  @endsection
