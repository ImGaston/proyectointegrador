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
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700,800&display=swap" rel="stylesheet">  <link href="https://fonts.googleapis.com/css?family=Faster+One|IBM+Plex+Sans:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:600&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <title>Sobre nosotros | Pitagoras'c</title>
  </head>

<body>
  <div class="container">
    <br>
    <br>
  <h1>Sobre nosotros</h1>
    <p>Desde el 2009 que nos propusimos ayudar desde nuestro trabajo y compromiso a mejorar la educación y la identidad de cada institución. Nuestro objetivo es que cada día te sientas orgullosa al ver a tus hijos entrar al colegio.
      <br>
      <br>
      Fundada en 2009, crecimos dando respuestas a todas las demandas, posicionándonos como una fábrica referente en el mercado argentino.
      Nos comprometemos con el desarrollo de indumentaria de óptima calidad tanto en las telas como en la confección y en las terminaciones.
      Diseñamos y desarrollamos uniformes para diferentes rubros respetando siempre las ideas y los valores de nuestros clientes.
      <br>
      <br>
      Nuestras prendas serán reparadas o reemplazadas si presentan fallas y/o defectos de fabricación que alteren su durabilidad durante <b>todo el año escolar</b>. Exceptuando maltrato evidente y/o roturas accidentales.
      <br>
      <br>
      En Pitagoras’c ponemos especial foco en la calidad: ya sea a la hora de elegir las telas, como de confeccionar o efectuar las terminaciones, trabajamos con conciencia y apuntando siempre a mejorar de manera permanente. En la fabricación de uniformes, somos una garantía. Juntos podremos vestir a su gente de modo tal de protegerla y a la vez hacer que cada empleado comunique las atributos más nobles de su organización.
      <br>
      <br>
      ¡Lo esperamos!
    </p>
    <br>
    <br>
  </div>

<!-- FOOTER -->
<footer class="container">
 <?php include_once 'footer.php'; ?>
</footer>

<!-- Bootstrap core JavaScript -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
