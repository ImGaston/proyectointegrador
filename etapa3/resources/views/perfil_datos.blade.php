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
          <h2> ¡Hola, {{ Auth::user()->name }} !</h2>
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
              <a class="nav-link" href="/cuenta">Mi cuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/perfil_datos">Datos personales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/compras">Compras</a>
            </li>

        </ul>
      </div>
    </nav>
    </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <br>
                    <h2>Estos son tus datos personales: {{ Auth::user()->name }} </h2>
          </div>
          <div class="col-md-4">
          <img src="/storage/{{ Auth::user()->avatar }}" class="img-thumbnail" alt="imagen usuario">
          <br>
            </div>
            <div class="col-md-6">
              <br>
            <h3>Nombre: {{ Auth::user()->name }} </h3>
            <br>
            <h3>Email: {{ Auth::user()->email }} </h3>
            <br>
            <h3>Fecha de Alta: {{ Auth::user()->created_at }} </h3>
            <br>
              </div>
      </div>
    </div>

  </main>



{{-- <main class="container">
  <h1>Detalle del producto "{{ $usuario->name }}"</h1>
    <div class="container">
    <div class="row">
      <div class="col-sm">
          <img src="{{"/public $usuario->avatar }}">

      </div> --}}

  @endsection
