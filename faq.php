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
	<!-- Bootstrap CSS -->
		<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">  <link href="https://fonts.googleapis.com/css?family=Faster+One|IBM+Plex+Sans:400,700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
	  <meta charset="utf-8">
    <title>Preguntas frecuentes | Pitagoras'c</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/estilos.css">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
  </head>
<body>
         <?php include("navbar.php")?>
<!--esto corresponde a la FAQ-->
  <div class="container text-center">
		<br>
		<br>
		<h1>Preguntas frecuentes</h1>
        <br>
        <article class="">
					  <br>
						<div class="container text-center">
							<div class="row text-center" id="imagen">
								<div class="col-12 col-md-6 col-lg-4 text-center" id="img">
									<img src="https://previews.123rf.com/images/coramax/coramax1208/coramax120801252/14800724-gente-3d-hombre-persona-y-preguntas-m%C3%A1s-frecuentes-faq-concepto.jpg" class="img-fluid" alt="Resultado de imagen para imagenes para faq" width="400" height="350">
								  </div>
                  </div>
        </article>
        <br>
        <details>
           <summary>¿Qué tipo de uniformes fabrican?</summary>
           <br>
           <p> Hacemos uniformes escolares, para servicios profesionales y para egresados.</p>
        </details>
        <br>
        <details>
           <summary>¿Hacen pedidos al por mayor?</summary>
           <br>
           <p>Si, hacemos pedidos al por mayor y al por menor.</p>
        </details>
        <br>
        <details>
           <summary>¿Los egresados pueden solicitar sus prendas personalizadas?</summary>
           <br>
           <p>Si, ofrecemos asesoramiento para grupos.</p>
        </details>
        <br>
        <details>
           <summary>¿Disponen de diferentes formas de pago?</summary>
           <br>
           <p>Sí, se puede abonar en efectivo, con débito o crédio. Contamos con descuentos por pago al contado y promociones con tarjeta.</p>
        </details>
        <br>
        <details>
              <summary>¿Con qué colegios trabajan?</summary>
              <br>
              <p>Trabajamos con colegios de Formosa.</p>
      </details>
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
 <!-- FOOTER -->
<footer class="container">
  <?php include_once 'footer.php'; ?>
</footer>
 </html>
