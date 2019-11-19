@include('register-login-controller')

<?php
	if ( isLogged() ) {
		header('location: profile.php');
		exit;
	}

	$pageTitle = 'Register';

	$errorsInRegister = [];

	$name = '';
  $lastName='';
	$email = '';

	if ($_POST) {
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
    $lastName = trim($_POST['lastName']);

		$errorsInRegister = registerValidate();

		if ( !$errorsInRegister ) {

			$imgName = saveImage();

			$_POST['avatar'] = $imgName;

			$theUser = saveUser();

			setcookie('userLoged', $theUser['email'], time() + 3000);

			login($theUser);
		}
	}

?>

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
        <div class="row">
           <div class="col">
             <label for="name">Nombre</label>
             <input id = "name" type="text" placeholder="Nombre"
             name = "name"
             class="form-control <?= isset($errorsInRegister['name']) ? 'is-invalid' : null ?>"
             value="<?= $name; ?>"
             >
             <div class="invalid-feedback">
              <?= isset($errorsInRegister['name']) ? $errorsInRegister['name'] : null; ?>
            </div>
             </div>

           <div class="col">
             <label for="lastName">Apellido</label>
             <input id = "lastName" type="text" placeholder="Apellido"
             name = "lastName"
             class="form-control <?= isset($errorsInRegister['lastName']) ? 'is-invalid' : null ?>"
             value="<?= $lastName; ?>"
             >
             <div class="invalid-feedback">
              <?= isset($errorsInRegister['lastName']) ? $errorsInRegister['lastName'] : null; ?>
            </div>
             </div>
        </div>
  <br>
        <div class="form-group">
        <label for="email">Dirección de correo electrónico</label>
        <input id = "email" type="email" placeholder="Ingresa tu Email"
        name="email"
        class="form-control <?= isset($errorsInRegister['email']) ? 'is-invalid' : null ?>"
        value="<?= $email; ?>"
      >
      <div class="invalid-feedback">
        <?= isset($errorsInRegister['email']) ? $errorsInRegister['email'] : null; ?>
      </div>
      </div>

      <div class="form-group">
        <label for="Password">Contraseña</label>
        <input id = "Password" type="password" placeholder="Ingresa tu contraseña"
        name="password"
        class="form-control <?= isset($errorsInRegister['password']) ? 'is-invalid' : null ?>"
      >
      <div class="invalid-feedback">
        <?= isset($errorsInRegister['password']) ? $errorsInRegister['password'] : null; ?>
      </div>
      </div>

      <div class="form-group">
        <label for="rePassword">Confirmar contraseña</label>
        <input id ="rePassword" type="Password"
        placeholder="Confirmá tu Contraseña"
        name="rePassword"
        class="form-control <?= isset($errorsInRegister['rePassword']) ? 'is-invalid' : null; ?>"
      >
      <div class="invalid-feedback">
        <?= isset($errorsInRegister['rePassword']) ? $errorsInRegister['rePassword'] : null; ?>
      </div>
      </div>

      <div class="form-group">
        <label><b>Imagen de perfil:</b></label>
        <div class="custom-file">
          <input
            type="file"
            name="avatar"
            class="custom-file-input <?= isset($errorsInRegister['avatar']) ? 'is-invalid' : null; ?>"
          >
          <label class="custom-file-label">Subí tu foto...</label>
          <div class="invalid-feedback">
            <?= isset($errorsInRegister['avatar']) ? $errorsInRegister['avatar'] : null; ?>
          </div>
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
          <p>¿Ya tenés cuenta?   <a href="Login.php">Ingresá</a></p>

        </div>
        </div>
        </div>
      </fieldset>
    </div>
  </form>
  @endsection
