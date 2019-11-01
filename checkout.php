<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';
	include("navbar.php");
		$theUser = $_SESSION['userLoged'];
//	require_once 'partials/head.php';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/stylecheckout.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
	  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">  <link href="https://fonts.googleapis.com/css?family=Faster+One|IBM+Plex+Sans:400,700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Bootstrap CSS -->

<title>Carrito de compras | Pitagoras'c</title>
  </head>
	  <main role="main" class="main">
	<body class="bg-white">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<br>
					<h2> ¡Hola, <?= $theUser['name'] ?>!</h2>
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
							<a class="nav-link " href="perfil_datos.php">Datos personales</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="preferencias.php">Mis preferencias</a>
						</li>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="checkout.php">Mi carrito de compras</a>
					</li>

				</ul>
			</div>
		</nav>
		</div>
		</div>
	    <div class="container">
	  <div class="py-5 text-center">
	    <h2>Mi carrito de compras</h2>
	  </div>
	  <div class="row">
	    <div class="col-md-4 order-md-2 mb-4">
	      <h4 class="d-flex justify-content-between align-items-center mb-3">
	        <span class="text-muted">Tu carrito de compras</span>
	        <span class="badge badge-secondary badge-pill">3</span>
	      </h4>
	      <ul class="list-group mb-3">
	        <li class="list-group-item d-flex justify-content-between lh-condensed">
	          <div>
	            <h6 class="my-0">Nombre de producto</h6>
	            <small class="text-muted">Descripción</small>
	          </div>
	          <span class="text-muted">$12</span>
	        </li>
	        <li class="list-group-item d-flex justify-content-between lh-condensed">
	          <div>
	            <h6 class="my-0">Segundo producto</h6>
	            <small class="text-muted">Descripción</small>
	          </div>
	          <span class="text-muted">$8</span>
	        </li>
	        <li class="list-group-item d-flex justify-content-between lh-condensed">
	          <div>
	            <h6 class="my-0">Tercer producto</h6>
	            <small class="text-muted">Descripción</small>
	          </div>
	          <span class="text-muted">$5</span>
	        </li>
	        <li class="list-group-item d-flex justify-content-between bg-light">
	          <div class="text-success">
	            <h6 class="my-0">Códido de promoción</h6>
	            <small>XSFEFF</small>
	          </div>
	          <span class="text-success">-$5</span>
	        </li>
	        <li class="list-group-item d-flex justify-content-between">
	          <span>Total (ARS)</span>
	          <strong>$20</strong>
	        </li>
	      </ul>

	      <form class="card p-2">
	        <div class="input-group">
	          <input type="text" class="form-control" placeholder="Código de Promoción">
	          <div class="input-group-append">
	            <button type="submit" class="btn btn-secondary">Ingresar</button>
	          </div>
	        </div>
	      </form>
	    </div>
	    <div class="col-md-8 order-md-1">
	      <h4 class="mb-3">Completa tus datos de facturación</h4>
	      <form class="needs-validation" novalidate>
	        <div class="row">
	          <div class="col-md-6 mb-3">
	            <label for="firstName">Nombre</label>
	            <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
	            <div class="invalid-feedback">
	             Campo requerido
	            </div>
	          </div>
	          <div class="col-md-6 mb-3">
	            <label for="lastName">Apellido</label>
	            <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
	            <div class="invalid-feedback">
	             Campo requerido
	            </div>
	          </div>
	        </div>

	        <div class="mb-3">
	          <label for="username">Ingresa tu mail de registro</label>
	          <div class="input-group">
	            <div class="input-group-prepend">
	              <span class="input-group-text">@</span>
	            </div>
	            <input type="text" class="form-control" id="username" placeholder="Mail de registro" required>
	            <div class="invalid-feedback" style="width: 100%;">
	              Campo requerido
	            </div>
	          </div>
	        </div>

	       	        <div class="mb-3">
	          <label for="address">Dirección</label>
	          <input type="text" class="form-control" id="address" placeholder="Av. de Los Lagos 123" required>
	          <div class="invalid-feedback">
	            Por favor ingresa la dirección de envío
	          </div>
	        </div>

	      	        <div class="row">
	       	    <div class="col-md-3 mb-3">
	            <label for="zip">Código Postal</label>
	            <input type="text" class="form-control" id="zip" placeholder="1640" required>
	            <div class="invalid-feedback">
	              Campo requerido
	            </div>
	          </div>
	        </div>
	        <hr class="mb-4">
	       	        <div class="custom-control custom-checkbox">
	          <input type="checkbox" class="custom-control-input" id="save-info">
	          <label class="custom-control-label" for="save-info">Recordar información para próximas compras</label>
	        </div>
	        <hr class="mb-4">

	        <h4 class="mb-3">Medio de pago</h4>

	        <div class="d-block my-3">
	          <div class="custom-control custom-radio">
	            <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
	            <label class="custom-control-label" for="credit">Tarjeta de Crédito</label>
	          </div>
	          <div class="custom-control custom-radio">
	            <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
	            <label class="custom-control-label" for="debit">Mercado Pago</label>
	          </div>
	          <div class="custom-control custom-radio">
	            <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
	            <label class="custom-control-label" for="paypal">Bitcoins</label>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-6 mb-3">
	            <label for="cc-name">Nombre y Apellido en la tarjeta</label>
	            <input type="text" class="form-control" id="cc-name" placeholder="" required>
	            <small class="text-muted">Campo requerido</small>
	            <div class="invalid-feedback">
	              Campo requerido
	            </div>
	          </div>
	          <div class="col-md-6 mb-3">
	            <label for="cc-number">Numero de la tarjeta de crédito</label>
	            <input type="text" class="form-control" id="cc-number" placeholder="" required>
	            <div class="invalid-feedback">
	                Campo requerido
	            </div>
	          </div>
	        </div>
	        <div class="row">
	          <div class="col-md-3 mb-3">
	            <label for="cc-expiration">Fecha de Vencimiento</label>
	            <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
	            <div class="invalid-feedback">
	              Campo requerido
	            </div>
	          </div>
	          <div class="col-md-3 mb-3">
	            <label for="cc-cvv">CVV</label>
	            <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
	            <div class="invalid-feedback">
	             Codigo de seguridad requerido
	            </div>
	          </div>
	        </div>
	        <hr class="mb-12">
	        <button class="btn btn-primary btn-lg btn-block" type="submit">Finalizar compra</button>
	      </form>
	    </div>
	  </div>


		<!-- FOOTER -->
		<footer class="container">
		 <?php include_once 'footer.php'; ?>
		</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>


</body>
</html>
