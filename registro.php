<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';

	// Si está logueda la persona la redirijo al profile
	if ( isLogged() ) {
		header('location: profile.php');
		exit;
	}

	$pageTitle = 'Register';
	//require_once 'partials/head.php';

		// Creamos esta variable con Array vacío para que no de error al entrar por GET
	$errorsInRegister = [];

	// Variables para persitir
	$name = '';
  $lastName='';
	$email = '';

	if ($_POST) {
		// Las variables de persistencia les asigno el valor que vino de $_POST
		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
    $lastName = trim($_POST['lastName']);

		// La función registerValidate() nos retorna el array de errores que almacenamos en esta variable
		$errorsInRegister = registerValidate();

		// Si no hay errores en el registro
		// Cuando no hay errores guardo la imagen y los datos
		// if ( count($errorsInRegister) == 0 ) {
		if ( !$errorsInRegister ) {

			// Guardo la imagen y obtengo el nombre aleatorio creado
			$imgName = saveImage();

			// Creo en $_POST una posición "avatar" para guardar el nombre de la imagen
			$_POST['avatar'] = $imgName;

			// Guardo al usuario en el archivo JSON, y me devuelve al usuario que guardó en array
			$theUser = saveUser();

			// Al momento en que se registar vamos a mantener la sesión abierta
			setcookie('userLoged', $theUser['email'], time() + 3000);

			// Logueo al usuario
			login($theUser);
		}
	}

	//require_once 'partials/navbar.php';
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/estilos.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>


    <title>Crear Cuenta</title>
  </head>
  <body class="text-align:center">
    <header>

         <?php include("navbar.php")?>

 <!--saque la nav a la navbar.php -->

</header>
    <!-- Formulario de registro -->

      <form class="col-md-4 modal-dialog-centered mx-auto" action="registro.php" method="post" enctype="multipart/form-data">
        <div class= "container align-items-center">
        <fieldset>
            <legend class="text-center header">Registrate</legend>
            <div class="row">
               <div class="col">
                 <label for="exampleInputName">Nombre</label>
                 <input type="text"
                 name = "name"
                 class="form-control <?= isset($errorsInRegister['name']) ? 'is-invalid' : null ?>"
                 value="<?= $name; ?>"
                 >
                 <div class="invalid-feedback">
           				<?= isset($errorsInRegister['name']) ? $errorsInRegister['name'] : null; ?>
         				</div>
                 </div>

               <div class="col">
                 <label for="exampleInputLastName">Apellido</label>
                 <input type="text"
                 name = "lastName"
                 class="form-control <?= isset($errorsInRegister['lastName']) ? 'is-invalid' : null ?>"
                 value="<?= $lastName; ?>"
                 >
                 <div class="invalid-feedback">
                  <?= isset($errorsInRegister['lastName']) ? $errorsInRegister['lastName'] : null; ?>
                </div>
                 </div>
            </div>

            <div class="form-group">
            <label for="exampleInputEmail1">Dirección de correo electrónico</label>
            <input type="email"
            name="email"
            class="form-control <?= isset($errorsInRegister['email']) ? 'is-invalid' : null ?>"
            value="<?= $email; ?>"
          >
          <div class="invalid-feedback">
            <?= isset($errorsInRegister['email']) ? $errorsInRegister['email'] : null; ?>
          </div>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password"
            name="password"
            class="form-control <?= isset($errorsInRegister['password']) ? 'is-invalid' : null ?>"
          >
          <div class="invalid-feedback">
            <?= isset($errorsInRegister['password']) ? $errorsInRegister['password'] : null; ?>
          </div>
          </div>

          <div class="form-group">
            <label for="exampleInputPassword1">Confirmar contraseña</label>
            <input type="password"
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
              <label class="custom-file-label">Suba una Imagen...</label>
              <div class="invalid-feedback">
                <?= isset($errorsInRegister['avatar']) ? $errorsInRegister['avatar'] : null; ?>
              </div>
            </div>
          </div>

          <div class="form-group text-center">
              <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary btn-lg"> Enviar </button>
              </div>
          </div>
          </fieldset>
        </div>
      </form>
      <!-- FOOTER -->
     <footer class="container">
       <?php include_once 'footer.php'; ?>
   </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
