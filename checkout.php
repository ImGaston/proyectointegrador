<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';
	$pageTitle = 'Home';
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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<!-- Bootstrap CSS -->

<title>Carrito de compras | Pitagoras'c</title>
  </head>
  <body class="checkout">

    <header>
      <div class="container pl-0 pr-0">
         <?php include("navbar.php")?>
      </div>
    <!--saque la nav a la navbar.php -->

    </header>
<div class="row-check checkout-form">
  <div class="col-75">
    <div class="container-check">
      <form action="/action_page.php">

        <div class="row-check">
          <div class="col-50">
            <h3>Direccion de Envio</h3>
            <label for="fname"><i class="fa fa-user"></i> nombre completo</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Direccion </label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> Ciudad</label>
            <input type="text" id="city" name="city" placeholder="Buenos Aires ">

            <div class="row-check">
              <div class="col-50">
                <label for="state">Estado</label>
                <input type="text" id="Estado" name="Estado" placeholder="Ar">
              </div>
              <div class="col-50">
                <label for="codigo">Codigo</label>
                <input type="text" id="codigo" name="codigo" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Pago</h3>
            <label for="fname">Aceptacion de Tarjetas</label>
            <div class="icon-container-check">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Nombre de la tarjeta</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">tarjeta de credito numero</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Mes de expiracion</label>
            <input type="text" id="expmes" name="expmes" placeholder="September">

            <div class="row-check">
              <div class="col-50">
                <label for="expyear">Año de expiracion</label>
                <input type="text" id="expaño" name="expaño" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>

        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Direccion de envio igual que la facturacion
        </label>
        <input type="submit" value="Confirmar Compra" class="boton">
      </form>
    </div>
  </div>

  <div class="col-25">
    <div class="container-check">
      <h4>CARRITO
        <span class="price" style="color:black">
          <i class="fa fa-shopping-cart"></i>
          <b>4</b>
        </span>
      </h4>
      <p><a href="#">Product 1</a> <span class="price">$15</span></p>
      <p><a href="#">Product 2</a> <span class="price">$5</span></p>
      <p><a href="#">Product 3</a> <span class="price">$8</span></p>
      <p><a href="#">Product 4</a> <span class="price">$2</span></p>
      <hr>
      <p>Total <span class="price" style="color:black"><b>$30</b></span></p>
    </div>
  </div>
</div>
<footer class="container">
	<?php include_once 'footer.php'; ?>
</footer>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
