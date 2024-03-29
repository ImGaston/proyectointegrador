<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';
	$pageTitle = 'Home';
//	require_once 'partials/head.php';
?>
	<?php require_once 'navbar.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="css/estilos.css">
		<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">  <link href="https://fonts.googleapis.com/css?family=Faster+One|IBM+Plex+Sans:400,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">

    <!-- Formulario de contacto -->

    <title>Contacto | Pitagoras'c</title>
  </head>
  <body class="form-contact">
    <header>

         <?php include_once 'navbar.php'?>

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="well well-sm">
                <form class="form-horizontal justify-content-center" method="post">
                    <fieldset>
                        <legend class="text-center header">Contáctanos</legend>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="fname" name="name" type="text" placeholder="Nombre" class="form-control">
                            </div>
                        </div>
                        <div class="form-group ">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="lname" name="name" type="text" placeholder="Apellido" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-envelope-o bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="email" name="email" type="text" placeholder="Dirección de correo electrónico" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-phone-square bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="phone" name="phone" type="text" placeholder="Telefono" class="form-control">
                            </div>
                        </div>
                        <div class="form-group form-horizontal justify-content-center">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-pencil-square-o bigicon"></i></span>
                            <div class="col-md-12">
                                <textarea class="form-control" id="message" name="message" placeholder="Deja tu consulta acá" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg"> Enviar </button>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                            <ul class="list-unstyled mb-0">
                                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                                    <p>Buenos Aires, República Argentina</p>
                                </li>
                                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                                    <p>+ 11 1234-5678</p>
                                </li>
                                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                                    <p>contacto@proyectointegrador.com</p>
                                </li>
                            </ul>
                        </div>
                    </fieldset>
                </form>
            </div>
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
