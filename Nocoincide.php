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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <title>Mayoristas</title>
</head>

<body>
    <div class="container text-center">
        <div class="row justify-content-md-center mt-4 mb-4">
            <div class="text-center">
            <h1>¡Ese mail no está registrado en nuestra Base!</h1>
            <br>
            </div>
            <div class="containertext-center">
      <div class="row justify-content-md-center mt-2 mb-2">
          <div class="col-4 col-sm-4">
        <img src="img/mailnotfound.jpg" class="img-fluid" alt="">
  </div>
  </div>
    </div>
  <div class="text-center">
<br>
<h2><a href="login.php">¡Volvé a intentarlo!</a></h2>



  </div>



        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <footer class="container">
        <?php include_once 'footer.php'; ?>
    </footer>
</body>

</html>
