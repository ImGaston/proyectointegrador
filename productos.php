<?php
	// Incluimos el controlador del registro-login
	// De esta manera tengo el scope a la funciones que necesito
	require_once 'register-login-controller.php';
	$pageTitle = 'Home';
//	require_once 'partials/head.php';
?>
	<?php require_once 'navbar.php'; ?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Productos</title>
  </head>

<body>
  <!-- Nhavigation -->
      <?php include_once ("navbar.php") ?>
  <!-- Page Content -->
  <div class="container">
    <div class="row"></div>

      <div class="col-lg-3"></div>

        <h1 class="my-4">Categorias</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Colegial</a>
          <a href="#" class="list-group-item">Egresados</a>
          <a href="#" class="list-group-item">Hospitalario</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="img/productos-01.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/productos-02.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="img/productos-03.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
				<br>
				<p>LINEA COLEGIAL</p>
<div class="card-group">
  <div class="card">
    <img src="img/chomba.jpeg" class="card-img-top" alt="chomba colegial">
    <div class="card-body">
      <h5 class="card-title">Chomba</h5>
      <p class="card-text">De varios colores , tela pique colegial algodon/polyester. Cuellos y puños con tejeduria con mezcla
				de hilo acrilico.Cartera a la vista y logos bordados .</p>
			<p> $720</p>
			<img src="img/carrito.jpeg" alt="carrito" >
      <p class="card-text"><small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/joggins.jpeg" class="card-img-top" alt="joggins deportivos">
    <div class="card-body">
      <h5 class="card-title">Joggins deportivos</h5>
      <p class="card-text">Confeccionados con frisas deportivas de algodon /polyester, colores fijos y terminaciones reforzadas.
			Amplia gama de colores en tela de verano e invierno</p>
			<p>$1.600</p>
			<img src="img/carrito.jpeg" alt="carrito" >
      <p class="card-text"><small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/images.jpeg" class="card-img-top" alt="delantales de jardin ">
    <div class="card-body">
      <h5 class="card-title">Equipos infantiles </h5>
      <p class="card-text">Diseños muy divertidos y comodos para los mas chiquitos. Logos bordados y superpuestos.
			Detalles encantadores en telas resistentes y muy lavables .</p>
				<p>$600</p>
				<img src="img/carrito.jpeg" alt="carrito" >
      <p class="card-text"><small class="text-muted"></small>&#9733; &#9733; &#9733; &#9733; &#9734;</p>

    </div>
  </div>
</div>
<br>
<p>  LINEA exclusiva para EGRESADOS </p>
<div class="card-group">
  <div class="card">
    <img src="img/egresados.jpeg" class="card-img-top" alt="equipos para egresados">
    <div class="card-body">
      <h5 class="card-title">Conjuntos para Egresados</h5>
      <p class="card-text">A ellos les dedicamos especial dedicacion en buscar un diseño de preferencia.
				En todos los talles, telas y  combinaciones que logran un efecto acorde al perfil de los egresados .</p>
				 <p>$ 980</p>
				 <img src="img/carrito.jpeg" alt="carrito" >
      <p class="card-text"><small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
    </div>
  </div>



  <div class="card">
    <img src="img/egresadospromojpeg.jpeg" class="card-img-top" alt="egresados promos">
    <div class="card-body">
      <h5 class="card-title">Promos Egresados</h5>
      <p class="card-text">Los grupos de egresados tienen posibilidades de crear su equipo para distinguirlos.
			Pudeden elegir colores, menciones en logos, identificaciones de año, división etc. Podemos asesorarlos
		y sugerirles ideas innovadoras.</p>
			<p> $2000</p>
			<img src="img/carrito.jpeg" alt="carrito" >
      <p class="card-text"><small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/egresadosgrupo.jpeg" class="card-img-top" alt="Egresados grupo">
    <div class="card-body">
      <h5 class="card-title">Para TODO EL GRUPO</h5>
      <p class="card-text">La sensacion de plasmar en sus buzos , gorros o accesorios  lo disfrutan los grupos
				y nosotros como  empresa por ayudarlos a hacer posible sus sueños.</p>
				<p> CONSULTAR $PRECIO</p>
				<img src="img/carrito.jpeg" alt="carrito" >
      <p class="card-text"><small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
    </div>
  </div>
</div>
<br>
<p>AMBOS PARA SERVICIOS
<div class="card-group">
  <div class="card">
    <img src="img/chaquetilla.jpeg" class="card-img-top" alt="chaquetilla">
    <div class="card-body">
      <h5 class="card-title">Chaquetilla de SERVICIOS </h5>
      <p class="card-text">Las chaquetillas para servicios hospitalarios, domesticos, u otras profesiones son prendas .
				 que deben ofrecer practicidad , comodidad y buen gusto. Se fabrican en diferentes tamaños.</p>
				 <p> $ 900</p>
				 <img src="img/carrito.jpeg" alt="carrito" >
      <p class="card-text"><small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/sanidadduo.jpeg" class="card-img-top" alt="sanidad duo">
    <div class="card-body">
      <h5 class="card-title">Ambo HOMBRE/ MUJER Para Servicios</h5>
      <p class="card-text">Son Ambos que  tienen caracteristicas esenciales de acuerdo a normas de uso (caso hospitalario) .
			Los pantalones  de hombre tienen diferente corte por ello puedes mencionar en tu solicitud el genero H/M.</p>
			<p> $ 1350 </p>
			<img src="img/carrito.jpeg" alt="carrito" >

      <p class="card-text"><small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small></p>
    </div>
  </div>
  <div class="card">
    <img src="img/amboliberty.jpeg" class="card-img-top" alt="chaquetilla liberty">
    <div class="card-body">
      <h5 class="card-title">Chaquetilla LIBERTY</h5>
      <p class="card-text">Algunos servicios requieren diseños mas divertidos y referidos a la actividad .
			que realizan. Ese distintivo se logra con telas liberty que hacen posible lograr este aspecto.</p>
				<p> $ 980 </p>
				<img src="img/carrito.jpeg" alt="carrito" >
      <p class="card-text"><small class="text-muted"></small>&#9733; &#9733; &#9733; &#9733; &#9734;</p>
    </div>
  </div>
</div>







</div>

        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  <!-- FOOTER -->
 <footer class="container">
   <?php include_once 'footer.php'; ?>
</footer>

  <!-- Bootstrap core JavaScript -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
