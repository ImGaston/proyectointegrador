@extends('layout')

@section('title')
Pitagoras | Alta de productos
@endsection

@section('main')

<ul class="errores">
  @foreach ($errors->all() as $error)
    <li>
      {{$error}}
    </li>
    @endforeach
</ul>

  <form class="col-md-4 modal-dialog-centered mx-auto" action="/altaproducto" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class= "container align-items-center">
    <fieldset>
        <legend class="text-center header">Alta de Productos</legend>
      <br>
        <div class="form-group">
        <label for="descripcion">Descripcion de producto</label>
        <input id = "descripcion" type="text" placeholder="Ingresa la descripción"
        name="descripcion" class="form-control"  value=""  >
        </div>

				<div class="form-group">
				<label for="precio">Precio</label>
				<input id = "precio" type="text" placeholder="Ingrese el precio"
				name="precio" class="form-control"  value=""  >
				</div>

				<div class="form-group">
				<label for="cantidad">Cantidad</label>
				<input id = "cantidad" type="text" placeholder="Ingresa la cantidad"
				name="cantidad" class="form-control"  value=""  >
				</div>

      <div class="form-group text-center">
      <div class="col-md-12 text-center">
        <button type="submit" class="btn btn-primary btn-lg"> Enviar </button>
          </div>
      </div>
      <div class="container">

        </div>
        </div>
            </fieldset>
  </form>
  @endsection
