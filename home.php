<!doctype html>
<html lang="es">
  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="css/carrousel.css">
<link rel="stylesheet" href="css/estilos.css">
      <title>E-Commerce</title>


</head>
  <body>
    <header>
      <div class="container">
         <?php include("navbar.php")?>
      </div>
 <!--saque la nav a la navbar.php -->

</header>
<div class="container">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
   <ol class="carousel-indicators">
     <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
     <li data-target="#myCarousel" data-slide-to="1"></li>
     <li data-target="#myCarousel" data-slide-to="2"></li>
   </ol>
   <div class="carousel-inner">
   <div class="carousel-item active">
    <img src="img/carousel-1.jpg" alt="Carousel1">
    <div class="container">
      <div class="carousel-caption izquierda">
        <h1>Los mejores uniformes escolares</h1>
        <p>Visite nuestra tienda de artículos</p>
        <p><a class="btn btn-lg btn-primary" href="#" role="button">Visitar Galería</a></p>
      </div>
    </div>
  </div>
    <div class="carousel-item">
      <img src="img/carousel-2.jpg" alt="Carousel2">
      <div class="container">
        <div class="carousel-caption izquierda">
          <h1>Todos los modelos</h1>
          <p>Tenemos los uniformes para todos los colegios de Buenos Aires</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Ver Listado</a></p>
        </div>
      </div>
    </div>
      <div class="carousel-item">
       <img src="img/carousel-3.jpg" alt="Carousel3">
       <div class="carousel-caption text-right izquierda">
         <h1>Promociones!</h1>
         <p>Visite nuestra sección de promociones!</p>
         <p><a class="btn btn-lg btn-primary" href="#" role="button">Visitar</a></p>
       </div>
     </div>
   </div>
         <a class="carousel-control-prev color" href="#myCarousel" role="button" data-slide="prev">
       <span class="carousel-control-prev-icon color" aria-hidden="true"></span>
       <span class="sr-only color ">Anterior</span>
     </a>
     <a class="carousel-control-next color" href="#myCarousel" role="button" data-slide="next">
       <span class="carousel-control-next-icon color" aria-hidden="true"></span>
       <span class="sr-only color">Próxima</span>
     </a>
       </div>
       </div>
       <!-- CATEGORIAS -->
      <div class="container mb-4">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <img src="img/hospitalario.jpg" alt="" class="img-fluid rounded">
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <img src="img/hospitalario.jpg" alt="" class="img-fluid rounded">
          </div>
          <div class="col-12 col-md-6 col-lg-4 mb-4">
            <img src="img/egresados.jpg" alt="" class="img-fluid rounded">
          </div>
        </div>
      </div>
      <!-- DATOS LOCAL -->
      <div class="container mb-4">
        <div class="row">
            <div class="col-lg-6">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3580.359336531267!2d-58.172174942535975!3d-26.184986630439457!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5031f0cb4bceefa!2sPitagoras&#39;c!5e0!3m2!1ses-419!2sar!4v1569293921813!5m2!1ses-419!2sar" width=450px height=376px frameborder="0" style="border:0;" allowfullscreen ></iframe>
            </div>
            <div class="col-lg-6">
                <div class="heading">
                    <h3>Lorem Ipsum Dolor</h3>
                    <div class="rating">
                        <i class="fa fa-star icon"></i>
                        <i class="fa fa-star icon"></i>
                        <i class="fa fa-star icon"></i>
                        <i class="fa fa-star icon"></i>
                        <i class="fa fa-star-o icon"></i>
                    </div>
                </div>
                <div class="info">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ornare leo porta cursus porttitor. Proin quis tempor lectus. Cras sodales nisi ut felis tincidunt suscipit. Nullam consectetur odio et lacus tempor vestibulum.</p>
                    <p>Aenean convallis, tortor eget vehicula vestibulum, sem nibh rutrum sem, vel sodales nisl velit eu ex. Sed hendrerit efficitur sollicitudin. Maecenas tempus augue lacus.</p>
                </div>
                <div class="gallery">
                    <h4>Local</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#"><img class="img-fluid image rounded" src="img/img-2.jpg"></a>
                        </div>
                        <div class="col-md-4">
                            <a href="#"><img class="img-fluid image rounded" src="img/img-1.png"></a>
                        </div>
                        <div class="col-md-4">
                            <a href="#"><img class="img-fluid image rounded" src="img/img-3.png"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

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
