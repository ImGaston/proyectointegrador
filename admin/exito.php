<?php

$host = '127.0.0.1';
$port = 3306;
$dbName = 'pitagoras';

$dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=utf8";
$user = 'root';
$pass = '';

$error = false;

try {
  $db = new PDO($dsn, $user, $pass);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $consulta = $db->prepare('SELECT * FROM productos');
  $consulta->execute();
  $results = $consulta->fetchAll(PDO::FETCH_ASSOC);
  $count = $consulta->rowCount();
} catch (Exception $e) {
  $error = true;
}


 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <title>Exito | Pitagoras</title>
   </head>



   <body>
     <br>
     <div class="container text-center">
         <div class="">
             <div class="text-center">
             <h1>¡Producto subido con éxito!</h1>
                 <!-- aca va el formulario -->
                 </div>
                 <br>
               <div class="text-center">
             <h2>
               <a href="index.php">¿Querés agregar otro producto?</a>
             </h2>
                 </div>
<br>
                 <h1>Listado de Productos</h1>

                 <?php if ($error): ?>
                     <p style="color: red;">Hubo un error. Inténtelo de nuevo más tarde</p>
                   <?php else: ?>
                     <?php if ($count > 0): ?>
                       <p><?= $count ?> resultados</p>
                       <ul>
                         <?php foreach ($results as $result): ?>
                           <li>
                             <b>Descripcion</b>: <?= $result["descripcion"] ?>.
                             <b>  Precio</b>: <?= $result["precio"] ?>
                              <b>Cantidad</b>: <?= $result["cantidad"] ?>

                           </li>
                         <?php endforeach; ?>
                       </ul>
                       <?php endif; ?>
                     <?php endif; ?>
                     <h2>
                       <a href="borrar.php">¿Querés borrar algún producto?</a>
                     </h2>
         </div>
     </div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
 </html>
