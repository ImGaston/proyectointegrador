<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';

	// Si está logueda la persona la redirijo al profile
	if ( !isLogged() ) {
		header('location: login.php');
		exit;
	}

		// Traemos al usuario logueado
	$theUser = $_SESSION['userLoged'];

	// Creamos esta variable con Array vacío para que no de error al entrar por GET
	$errorsInEdit = [];

	// Variables para persitir
	$name = $theUser['name'];
	$lastName=$theUser["lastName"];
	$email = $theUser['email'];

	if ($_POST) {
		// Las variables de persistencia les asigno el valor que vino de $_POST
		$name = trim($_POST['name']);
		$lastName = trim($_POST['lastName']);
		$email = $theUser['email'];

		$errorsInEdit = registerEdit();

		if ( !$errorsInEdit ) {

      	$imgName = saveImage();
			// Guardo la imagen y obtengo el nombre aleatorio creado
			$_POST['avatar'] = $imgName;

			// Guardo al usuario editado y lo guardo en la variable $userEdited para re-loguearlo
			$userEdited = editUser($email);

			// Logueo al usuario
			login($userEdited);
		}
	}


?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
		<script
			src="https://code.jquery.com/jquery-3.3.1.min.js"
			integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
			crossorigin="anonymous"></script>
		<title>Página de registro | Pitagoras'c</title>
  </head>
  <body>
   <!-- NAVBAR -->
    <header>

             <?php include("navbar.php")?>
   </header>

	 <main role="main" class="main">
		 <div class="container">
			 <div class="row">
				 <div class="col-md-6">
					 <br>
					 <h2>Bienvenido, <?= $theUser['name'] ?></h2>
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
							 <a class="nav-link" href="perfil.php">Mi cuenta</a>
						 </li>
						 <li class="nav-item">
							 <a class="nav-link active" href="perfil_datos">Datos personales</a>
						 </li>
						 <li class="nav-item">
							 <a class="nav-link" href="preferencias.php">Mis preferencias</a>
						 </li>
						 <li class="nav-item">
							 <a class="nav-link" href="checkout.php">Mi Carrito de Compras</a>
						 </li>
											 </ul>
			 </div>
		 </nav>
		 </div>
		 </div>
	 <div class="container" style="margin-top:30px; margin-bottom: 30px;">
		 <div class="row justify-content-center">
			 <div class="col-md-10">

				 <h2>Edita tu información</h2>

				 <form method="post" enctype="multipart/form-data">
					 <div class="row">
						 <div class="col-md-4">
							 <div class="form-group">
								 <label><b>Nombre:</b></label>
								 <input
									 type="text"
									 name="name"
									 class="form-control <?= isset($errorsInEdit['name']) ? 'is-invalid' : null ?>"
									 value="<?= $name; ?>"
								 >
								 <div class="invalid-feedback">
									 <?= isset($errorsInEdit['name']) ? $errorsInEdit['name'] : null; ?>
								 </div>
							 </div>
						 </div>
						 <div class="col-md-4">
							 <div class="form-group">
								 <label><b>Apellido:</b></label>
								 <input
									 type="text"
									 name="lastName"
									 class="form-control <?= isset($errorsInEdit['lastName']) ? 'is-invalid' : null ?>"
									 value="<?= $lastName; ?>"
								 >
								 <div class="invalid-feedback">
									 <?= isset($errorsInEdit['lastName']) ? $errorsInEdit['lastName'] : null; ?>
								 </div>
							 </div>
						 </div>
						 <div class="col-md-4">
							 <div class="form-group">
								 <label><b>Correo electrónico:</b></label>
								 <input
									 type="text"
									 name="email"
									 class="form-control <?= isset($errorsInEdit['email']) ? 'is-invalid' : null ?>"
									 value="<?= $email; ?>"
									 readonly
								 >
								 <div class="invalid-feedback">
									 <?= isset($errorsInEdit['email']) ? $errorsInEdit['email'] : null; ?>
								 </div>
							 </div>
						 </div>
						 <div class="col-md-6">
							 <div class="form-group">
								 <label><b>Password:</b></label>
								 <input
									 type="password"
									 name="password"
									 class="form-control <?= isset($errorsInEdit['password']) ? 'is-invalid' : null ?>"
								 >
								 <div class="invalid-feedback">
									 <?= isset($errorsInEdit['password']) ? $errorsInEdit['password'] : null; ?>
								 </div>
							 </div>
						 </div>
						 <div class="col-md-6">
							 <div class="form-group">
								 <label><b>Repetir Password:</b></label>
								 <input
									 type="password"
									 name="rePassword"
									 class="form-control <?= isset($errorsInEdit['rePassword']) ? 'is-invalid' : null; ?>"
								 >
								 <div class="invalid-feedback">
									 <?= isset($errorsInEdit['rePassword']) ? $errorsInEdit['rePassword'] : null; ?>
								 </div>
							 </div>
						 </div>

						 <div class="col-md-6">
							 	<div class="form-group">
 	            <label><b>Imagen de perfil:</b></label>
 	            <div class="custom-file">
 	              <input
 	                type="file"
 	                name="avatar"
 	                class="custom-file-input <?= isset($errorsInEdit['avatar']) ? 'is-invalid' : null; ?>"
 	              >
 	              <label class="custom-file-label">Subí tu foto...</label>
 	              <div class="invalid-feedback">
 	                <?= isset($errorsInEdit['avatar']) ? $errorsInEdit['avatar'] : null; ?>
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
						</div>


						 <div class="col-12">
						<button type="submit" class="btn btn-warning">Editar información</button>
						 </div>
					 </div>
				 </form>
			 </div>
		 </div>
	 </div>
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
