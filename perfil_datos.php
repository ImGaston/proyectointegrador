<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';
	$pageTitle = 'Home';
		$theUser = $_SESSION['userLoged'];
//	require_once 'partials/head.php';
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
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">  <link href="https://fonts.googleapis.com/css?family=Faster+One|IBM+Plex+Sans:400,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
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
    <!-- Aca es donde va la magia del php para cargar distintas paginas segun el nav -->
        <main>
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<br>
								<h2>Hola <?= $theUser['name']; ?></h2>
								<img src="data/avatars/<?= $theUser['avatar']; ?>" class="img-thumbnail" alt="imagen usuario">
								<br><br>
								<a href="#" class="btn btn-info"><?= $theUser['email']; ?></a>
								<a href="editar_perfil.php" class="btn btn-danger">Editar información</a>
							</div>
						</div>
					</div>
					<div class="container">
						<div class="row border mt-4 mb-4 rounded">
							<div class="col">
								<h3 class="m-2 text-center">¡Tu opinión nos interesa!</h3>
								<p class="text-center">Nuestro objetivo es ofrecer un servicio de calidad y valoramos mucho tus comentarios</p>
								<p class="text-center"><a href="#">Este formulario nos ayuda a mejorar, muchas gracias </a></p>
							</div>
						</div>
					</div>
        </main>
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
