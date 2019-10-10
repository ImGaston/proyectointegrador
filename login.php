<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';

	// Si está logueda la persona la redirijo al profile
	if ( isLogged() ) {
		header('location: profile.php');
		exit;
	}

	// Generamos nuestro array de errores interno
	$errorsInLogin = [];

	// Persistimos el email
	$email = '';

	if ($_POST) {
		// Persistimos el email con lo vino por $_POST
		$email = trim($_POST['email']);

		// La función loginValidate() nos retorna el array de errores que almacenamos en esta variable
		$errorsInLogin = loginValidate();

		if ( !$errorsInLogin ) {
			// Traemos al usuario que vamos a loguear
			$userToLogin = getUserByEmail($email);

			// Preguntamos si quiere ser recordado
			if ( isset($_POST['rememberUser']) ) {
				setcookie('userLoged', $email, time() + 3000);
			}

			// Logeamos al usuario
			login($userToLogin);
		}
	}

	$pageTitle = 'Login';

	require_once 'navbar.php'; ?>


<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link rel="stylesheet" href="css/estilos.css">
    <title>Iniciar Sesión</title>
  </head>
  <body>
    <header>

      </header>

			<div class="container" style="margin-top:30px; margin-bottom: 30px;">
				<div class="row justify-content-center">
					<div class="col-md-10">
						<?php if (count($errorsInLogin) > 0): ?>
							<div class="alert alert-danger">
								<ul>
									<?php foreach ($errorsInLogin as $oneError): ?>
										<li> <?= $oneError; ?> </li>
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>

  <div class="container text-center">
    <form class="form-signin" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión</h1>
        <br>
      <label for="inputEmail" class="sr-only">Direccion de email</label>
      <input type="email"
			name= "email"
				value="<?= $email; ?>"
			id="inputEmail" class="form-control" placeholder="Dirección de e-mail" required autofocus>
        <br>
      <label for="inputPassword" class="sr-only">Contraseña</label>
      <input type="password"
			name= "password"
			id="inputPassword" class="form-control" placeholder="Contraseña" required>
      <div class="checkbox mb-3">
				<br>
        <label>
          <input type="checkbox" value="remember-me"> Recuerdame
        </label>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
    <div class="row">
      <div class="col">
        <p>¿Todavía no sos cliente?<a href="registro.php"> ¡Crea una Cuenta!</a></p>

      </div>

    </div>
  </div>
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
