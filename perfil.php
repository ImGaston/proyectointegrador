<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/perfil.css">
    <!-- Formulario de contacto -->

    <title>Formulario de Registro</title>
  </head>
  <body>
       <!-- VA PEGADO EL HEADER DE TERSY -->
      <header id="header" class="">
        <div class="container">
          <div class="row" >
            <div class="col-12">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                          </a>
                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                          </div>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                        </li>
                      </ul>
                      <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                      </form>
                  </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
      <main role="main" class="main">
        <div class="container">
          <div class="row">
              <div class="col">
                  <h2>Hola, <br>$nombre!</h2>
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
                  <a class="nav-link" href="#">Pedidos</a>
                </li>
            </ul>
          </div>
        </div>
    <!-- Aca es donde va la magia del php para cargar distintas paginas segun el nav -->
        <div class="container">
          <div class="row">
            <div class="col">
              <h2 class="pedido">Ultimo Pedido $fecha</h2><br>
              <a href="#" class="link-envio">DURNF28240</a>
            </div>
          </div>

        </div>
        <!-- ULTIMO PEDIDO -->
        <div class="container">
          <div class="row">
            <div class="col">
              
            </div>
          </div>
        </div>
        <!-- SEGUIMIENTO PEDIDO -->
        <div class="container">
          <div class="row">
            <div class="col">
              <button type="button" class="btn btn-primary btn-lg btn-block">Ver Pedido</button>
            </div>
          </div>
        </div>
        <!-- RECOMENDACION -->
        <div class="container">
          <div class="row">
            <div class="col">

            </div>
          </div>
        </div>
        <!-- ENCUESTA -->
        <div class="container">
          <div class="row">
            <div class="col">

            </div>
          </div>
        </div>
      </main>
      <footer>

      </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
