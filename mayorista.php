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
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 col-sm-6">
                <!-- aca va el formulario -->
                <form class="form-horizontal justify-content-center" method="post">
                    <fieldset>
                        <legend class="text-center header">Conoce nuestro modelo de negocio mayorista</legend>
                        <div class="form-group">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="colegio" name="colegio" type="text" placeholder="Colegio" class="form-control">
                            </div>
                        </div>
                        <div class="form-group ">
                            <span class="col-md-1 col-md-offset-2 text-center"><i class="fa fa-user bigicon"></i></span>
                            <div class="col-md-12">
                                <input id="alumnos" name="alumnos" type="text" placeholder="Alumnos" class="form-control">
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
                                <textarea class="form-control" id="message" name="message" placeholder="Contanos un poco acerca del colegio y sus inquietudes" rows="7"></textarea>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg"> Enviar </button>
                            </div>
                        </div>
                    </fieldset>
                </form>

            </div>
            <div class="col-12 col-sm-6">
                <!-- aca va la imagen -->
                <img src="img/foto-colegial.png" class="img-fluid" alt="">

            </div>
        </div>
    </div>
    <div class="container mb-4">
        <div class="row justify-content-md-center mt-4 mb-4">
            <H3 class="mb-4 mt-6 text-center">Nuestros uniformes van a reflejar la identidad de tu Colegio:</H3>
        </div>
        <div class="row justify-content-md-center mt-4">
            <div class="col-12 col-sm-6 col-md-3 text-center mb-4">
                <img src="img/mayorista-4.png" class="mb-2" alt="">
                <p>Garantia de cambio.</p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 text-center mb-4">
                <img src="img/mayorista-3.png" class="mb-2" alt="">
                <p>Stock garantizado.</p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 text-center mb-4">
                <img src="img/mayorista-2.png" class="mb-2" alt="">
                <p>10 años de experiencia.</p>
            </div>
            <div class="col-12 col-sm-6 col-md-3 text-center mb-4">
                <img src="img/mayorista-1.png" class="mb-2" alt="">
                <p>Trato personalizado.</p>
            </div>
        </div>
    </div>
    <!-- LISTADO COLEGIOS -->
    <div class="container d-none d-sm-none d-md-block">
        <div class="row justify-content-md-center">
            <h3 class="mb-4 mt-6">Algunos de los colegios que confían en nosotros</h3>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-6 col-lg-3 mb-3 text-center">
                <img src="img/colegio-1.png" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3 text-center">
                <img src="img/colegio-2.png" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3 text-center">
                <img src="img/colegio-3.png" alt="">
            </div>
            <div class="col-12 col-md-6 col-lg-3 mb-3 text-center">
                <img src="img/colegio-4.png" alt="">
            </div>
        </div>
    </div>
    <!-- BENEFICIOS IMAGEN PARA MOBILE -->
    <div class="container d-none d-block d-sm-block d-md-none">
        <div class="row justify-content-md-center">
            <h3 class="mb-4 mt-6 text-center">Algunos de los colegios que confían en nosotros</h3>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <img src="img/colegio-xs.jpg" class="img-fluid" alt="">
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