<?php
// Incluimos el controlador del registro-login
// De esta manera tengo el scope a la funciones que necesito
require_once '../../register-login-controller.php';
$pageTitle = 'Para todos';
//	require_once 'partials/head.php';
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../../css/estilos.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">
     <link href="https://fonts.googleapis.com/css?family=Faster+One|IBM+Plex+Sans:400,700&display=swap" rel="stylesheet">
    <title>Tabla producto</title>

    </head>
  <body class="detalles-de-productos">
  <header>
    <?php require_once '../../navbar.php'; ?>
    </header>
  <main class="container">
    <h1>grupo de egresados</h1>
    <div class="container">
      <div class="row">
        <div class="col-sm">
          <img src="../../img/egresadosgrupo.jpeg"width="250"alt="grupo de egresados">

        </div>
        <div class="col-sm">
          <h2>Seleccion de talles </h2>
          <select>
            <option value="">Por favor selecciona el talle</option>
            <option value="XS">XS</option>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
          </select>
          <br>
          <br>
          <h2>Colores</h2>


          <section id="seleccion-color">

          	<label>
          		<input name="color" type="radio" />
          		<span class="circulo" style="background-color: #EA104F"></span>
          		<span class="nombre-color">Rojo</span>
          	</label>

          	<label>
          		<input name="color" type="radio" />
          		<span class="circulo" style="background-color: #9933FF"></span>
          		<span class="nombre-color">Violeta</span>
          	</label>

          	<label>
          		<input name="color" type="radio" />
          		<span class="circulo" style="background-color: #3358FF"></span>
          		<span class="nombre-color">Azul</span>
          	</label>

          </section>
          <button type="button" class="btn btn-primary">Agregar al carrito</button>
          <img src="../../img/carrito.jpeg"width="90" alt="carrito">
        </div>

      </div>
    </div>
</main>


<footer class = "container">
  <?php include_once '../../footer.php'; ?>
</footer>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>
