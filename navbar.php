<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="home.php">
      <img src="img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
      Pitagoras'c
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="#">Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tienda
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="productos.php">Ver todo</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Colegios</a>
            <a class="dropdown-item" href="#">Egresados</a>
            <a class="dropdown-item" href="#">Hospitalario</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mayorista.php">Mayorista</a>
        </li>
        <li class="nav-item">
          <a href="#myModal" data-toggle="modal" data-target="#myModal" class="nav-link">Contacto</a>
        </li>
      </ul>

     <ul class="navbar-nav ml-auto" style="display: flex">
       <!-- Preguntamos si NO está logueado el usuario para mostrar los enlaces Register y Login -->
       <?php if ( !isLogged() ) : ?>
         <li class="nav-item"><a class="nav-link" href="registro.php">Registrate</a></li>
         <li class="nav-item"><a class="nav-link" href="login.php">Login</a></li>
       <?php else: ?>
         <li class="nav-item dropdown">
           <a class="nav-link dropdown-toggle" href="#" id="dropNavBar" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <img src="data/avatars/<?= $_SESSION['userLoged']['avatar']; ?>" width="40" style="border-radius: 50%; background-color: #ffffff; padding: 5px;">
             <?= $_SESSION['userLoged']['name'] ?>
           </a>
           <div class="dropdown-menu" aria-labelledby="dropNavBar">
             <a class="dropdown-item" href="perfil.php">Mi perfil</a>
             <a class="dropdown-item" href="checkout.php">Mi cuenta</a>
             <a class="dropdown-item" href="logout.php">Salir</a>
           </div>
         </li>
       <?php endif ?>
     </ul>

      <!-- <form class="form-inline mt-2 mb-0 mt-md-0">
         <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="BUSCAR">
         <button class="btn btn-outline-success my-2 my-sm-0" type="submit">BUSCAR</button>
       </form> -->
      <!-- <a class="perfil" href="login.php"><ion-icon size="large" name="contact"></ion-icon></a> -->
    </div>
  </div>
</nav>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contacto</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Nombre">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Apellido">
          </div>
        </div>
        <label for="consulta1"></label>
        <div class="form-label-group">
          <input type="Email" id="inputEmail" class="form-control" placeholder="Email" required>
        </div>

        <div class="form-group">
          <label for="consulta1"></label>
          <textarea class="form-control" id="consulta1" rows="4" placeholder="Dejanos tu consulta aca"></textarea>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
         <a href="gracias.php"> <button type="button" class="btn btn-primary">Enviar</button> </a>
      </div>
    </div>
  </div>
</div>
