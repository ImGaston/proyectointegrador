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
      <label for="descripcion">Nombre del producto</label>
      <input id = "name" type="text" placeholder="Ingresa el nombre"
      name="name" class="form-control"  value=""  >
      </div>

        <div class="form-group">
        <label for="description">Descripcion del producto</label>
        <input id = "description" type="text" placeholder="Ingresa la descripción"
        name="description" class="form-control"  value=""  >
        </div>

				<div class="form-group">
				<label for="precio">Precio</label>
				<input id = "precio" type="text" placeholder="Ingrese el precio"
				name="precio" class="form-control"  value=""  >
				</div>


			    <div class="form-group">
          <label><b>Imagen de producto:</b></label>
          <div class="custom-file">
            <input
              type="file"
              name="image_url"
              class="custom-file-input"
            >
            <label class="custom-file-label">Subí la foto...</label>
            <script type="application/javascript">
            $('.custom-file-input').on('change', function(event) {
                var inputFile = event.currentTarget;
                $(inputFile).parent()
                    .find('.custom-file-label')
                    .html(inputFile.files[0].name);
            });
            </script>
          </div>
        </div>


        <div class="form-group">
        <label for="category_id">Categoría del producto</label>
        <select name="category_id">

          <option value="-1"> Seleccionar Categoría</option>
          @foreach ($categoryMenu as $cate)
            <option value="{{$cate->id}}">{{$cate->name}}</option>
          @endforeach

        </select>
        </div>

        <div class="form-group">
        <label for="prenda_id">Tipo de Prenda</label>
        <select name="prenda_id">
          <option value="-1"> Seleccionar Prenda</option>
          @foreach ($prendaMenu as $prend)
            <option value="{{$prend->id}}">{{$prend->name}}</option>
          @endforeach
        </select>
        </div>

        <div class="form-group">
        <label for="talle_id">Talle</label>

        <select name="talle_id">
          <option value="-1"> Seleccionar Prenda</option>
          @foreach ($TalleMenu as $talle)
            <option value="{{$talle->id}}">{{$talle->name}}</option>
          @endforeach
        </select>
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
