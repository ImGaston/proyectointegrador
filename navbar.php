<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
     <a class="navbar-brand" href="home.php">
     <img src="img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
     Pitagoras'c
 </a>

 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse"aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="dropdown-item" href="productos.php">Ver Todo</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Colegios</a>
                <a class="dropdown-item" href="#">Egresados</a>
                <a class="dropdown-item" href="#">Hospitalario</a>
              </div>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="contacto.php">Contacto</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="mayorista.php" >Mayorista</a>
           </li>
     </ul>

     <ul class="navbar-nav ml-auto" style="display: flex; align-items: center;">
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
             <a class="dropdown-item" href="profile.php">Mi perfil</a>
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
