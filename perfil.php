<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/perfil.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <title>Formulario de Registro</title>
  </head>
  <body>
   <!-- NAVBAR -->
       <header>
         <div class="container">
             <?php include("navbar.php")?>
         </div>
  
   </header>
      <main role="main" class="main">
        <div class="container">
          <div class="row">
              <div class="col">
                  <h1>Hola, <br>$nombre!</h1>
              </div>
              <div class="col col-lg-2 text-right">
                <a href="#">Cerrar sesión</a>
              </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Mi cuenta</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Datos Personales</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Wishlist</a>
                </li>
            </ul>
          </div>
        </div>
    <!-- Aca es donde va la magia del php para cargar distintas paginas segun el nav -->
        <div class="container">
          <div class="row border mt-2 mb-1">
            <div class="col">
              <h2 class="pedido mt-2">Ultimo Pedido $fecha</h2><br>
              <a href="#" class="link-envio"><b>DURNF28240</b></a>
              <p><b>2 articulos</b> total <b>$ 2890</b> </p>
              <hr class="featurette-divider">
              <p class="mb-0">Enviado el <b>$fecha</b></p>
              <p class="mb-0">Número de seguimiento: $número</p>
              <a href="#">REALIZAR SEGUIMIENTO DE PEDIDO </a><br>
            </div>
          <div class="row m-0 mt-2">
            <div class="col-3 col-md-2">
              <img src="img/compra-1.jpg" class="img-thumbnail rounded img-fluid" alt="Responsive image">
            </div>
            <div class="col-3 col-md-2">
              <img src="img/compra-2.jpg" class="img-thumbnail rounded img-fluid" alt="Responsive image">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg btn-block m-3">Ver Pedido<ion-icon name="cart"></ion-icon></ion-icon></button>
            </div>
          </div>
          </div>
        </div>
        <!-- SEGUIMIENTO PEDIDO -->
        <div class="container">
          <div class="row">
            <div class="col">
              <hr class="featurette-divider">
            </div>
          </div>
        </div>
        <!-- RECOMENDACION -->
        <div class="container">
          <div class="row">
            <div class="col">
              <h2>Te puede interesar...</h2>
            </div>
          <div class="row m-0">
              <div class="col-3 col-md-2">
                <img src="img/compra-1.jpg" class="img-thumbnail rounded img-fluid" alt="Responsive image">
              </div>
              <div class="col-3 col-md-2">
                <img src="img/compra-2.jpg" class="img-thumbnail rounded img-fluid" alt="Responsive image">
              </div>
              <div class="col-3 col-md-2">
                <img src="img/compra-2.jpg" class="img-thumbnail rounded img-fluid" alt="Responsive image">
              </div>
          </div>
        </div>
        <!-- ENCUESTA -->
        <div class="container">
          <div class="row border mt-4 mb-4 rounded">
            <div class="col">
              <h3 class="m-2 text-center">Tu opinión nos interesa!</h3>
              <p class="text-center">Nuestro objetivo es mejorar y valoramos mucho tus comentarios</p>
              <p class="text-center"><a href="#">Este formulario nos ayuda, muchas gracias </a></p>
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
