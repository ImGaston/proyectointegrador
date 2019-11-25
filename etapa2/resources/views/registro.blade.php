@extends('layout')

@section('title')
Pitagoras | Registro de Usuario
@endsection

@section('main')
  <form class="col-md-4 modal-dialog-centered mx-auto" action="/registro" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class= "container align-items-center">
    <fieldset>
        <legend class="text-center header">Registrate</legend>
        <div class="form-group">
           <div class="form-group">
             <label for="name">Nombre</label>
             <input id = "name" type="text" placeholder="Nombre"
             name = "nombre"
             class="form-control"
             value=""             >
             </div>

						 <div class="form-group">
	             <label for="Apellido">Apellido</label>
	             <input id = "Apellido" type="text" placeholder="Apellido"
	             name = "apellido"
	             class="form-control"
	             value="">
	             </div>
        <div class="form-group">
        <label for="email">Dirección de correo electrónico</label>
        <input id = "email" type="email" placeholder="Ingresa tu Email"
        name="email"
        class="form-control"
        value=""
      >
        </div>

      <div class="form-group">
        <label for="Password">Contraseña</label>
        <input id = "Password" type="password" placeholder="Ingresa tu contraseña"
        name="password"
        class="form-control"
      >
          </div>

      <div class="form-group">
        <label for="rePassword">Confirmar contraseña</label>
        <input id ="rePassword" type="Password"
        placeholder="Confirmá tu Contraseña"
        name="rePassword"
        class="form-control"
      >
        </div>

      <div class="form-group">
        <label><b>Imagen de perfil:</b></label>
        <div class="custom-file">
          <input
            type="file"
            name="avatar"
            class="custom-file-input"
          >
          <label class="custom-file-label">Subí tu foto...</label>
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

      <div class="form-group text-center">
          <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-primary btn-lg"> Enviar </button>
          </div>
      </div>
      <div class="container">

      <div class="row text-center">
        <div class="col">
          <p>¿Ya tenés cuenta?   <a href="/Login">Ingresá</a></p>

        </div>
        </div>
        </div>
      </fieldset>
    </div>
  </form>


  @endsection
