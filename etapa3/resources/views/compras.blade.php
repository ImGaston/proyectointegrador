@extends('layout')

@section('title')
 Compras | {{ Auth::user()->name }}
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
              <a class="nav-link" href="/cuenta">Mi cuenta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="/perfil_datos">Datos personales</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/compras">Compras</a>
            </li>

        </ul>
      </div>
    </nav>
    </div>
    </div>

    <div class="container border mt-2 mb-1">
      <div class="row mt-2 mb-1">
        <div class="col">
          <h2 class="pedido mt-2">Mis compras</h2><br>
            

        
          
        <hr class="featurette-divider">
        </div>
      </div>



    
    
    </div>
  </main>


 @endsection