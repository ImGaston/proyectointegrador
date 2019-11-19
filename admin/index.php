<?php

$host = '127.0.0.1';
$port = 8889;
$dbName = 'ecommerce';

$dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=utf8";
$user = 'root';
$pass = 'root';

$error = false;

$errorsInRegister = [];

$categoria = '';
$prenda = '';
$talle = '';
$descripcion = '';
$precio = '';
$cantidad = '';

function registerValidate(){
  $errors = [];

  $categoria = trim($_POST["categoria"]);
  $prenda = trim($_POST["prenda"]);
  $talle = trim($_POST["talle"]);
  $descripcion = trim($_POST["descripcion"]);
  $precio = trim($_POST["precio"]);
  $cantidad = trim($_POST["cantidad"]);

  if ( empty($categoria) ) {
    $errors['categoria'] = 'Campo obligatorio';
  } elseif ($categoria==-1) {
      $errors['categoria'] = 'Campo obligatorio';
  }

  if ( empty($prenda) ) {
    $errors['prenda'] = 'Campo obligatorio';
    }

  if ( empty($talle) ) {
    $errors['talle'] = 'Campo obligatorio';
  }

  if ( empty($descripcion) ) {
    $errors['descripcion'] = 'Campo obligatorio';
  }

  if ( empty($precio) ) {
    $errors['precio'] = 'Campo obligatorio';
  } elseif (!is_numeric($precio)) {
      $errors['precio'] = 'El valor debe ser numérico';
    } elseif ($precio < 0){
      $errors['precio'] = 'El precio no puede ser negativo';
    }


  if ( empty($cantidad) ) {
    $errors['cantidad'] = 'Campo obligatorio';
  } elseif (!is_numeric($cantidad)) {
      $errors['cantidad'] = 'El valor debe ser numérico';
    } elseif ($cantidad < 0){
      $errors['cantidad'] = 'La cantidad no puede ser negativo';
    }

  return $errors;
}


if ($_POST) {


  $categoria = trim($_POST["categoria"]);
  $prenda = trim($_POST["prenda"]);
  $talle = trim($_POST["talle"]);
  $descripcion = trim($_POST["descripcion"]);
  $precio = trim($_POST["precio"]);
  $cantidad = trim($_POST["cantidad"]);

  $errorsInRegister = registerValidate();

  if ( !$errorsInRegister ) {

    try {
      $db = new PDO($dsn, $user, $pass);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $consulta = $db->prepare("INSERT into productos (descripcion, precio, cantidad, categoria_id, prenda_id, talle_id) values (:descripcion, :precio, :cantidad, :categoria_id, :prenda_id, :talle_id)");

      $consulta -> bindValue(":descripcion", $descripcion);
      $consulta -> bindValue(":precio", $precio);
      $consulta -> bindValue(":cantidad", $cantidad);
      $consulta -> bindValue(":categoria_id", $categoria);
      $consulta -> bindValue(":prenda_id", $prenda);
      $consulta -> bindValue(":talle_id", $talle);

      $consulta->execute();
      	header('location: exito.php');
    } catch (Exception $e) {
      $error = true;
      header('location: error.php');

    }

    }

  }




 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Alta Productos | Pitagoras </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="" action="index.php" method="post">
				<span class="contact100-form-title">
Alta Productos Pitágoras				</span>

<div class="wrap-input100 input100-select">
	<span class="label-input100">Categoría</span>
	<div>
		<select class="selection-2" name="categoria">

      <?php
        $cates = [];
       try {
         $db = new PDO($dsn, $user, $pass);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $consulta = $db->prepare("SELECT categoria, id FROM categorias");
         $consulta->execute();
         $cates = $consulta->fetchAll(PDO::FETCH_ASSOC);
       } catch (Exception $e) {
         $error = true;
       }
       ?>

       <option value="-1"> Seleccionar Categoría</option>
       <?php foreach ($cates as $cate): ?>
         <option value="<?= $cate["id"] ; ?>"><?= $cate["categoria"]; ?></option>
           <?php endforeach; ?>
		</select>
	</div>
	<span class="focus-input100"></span>
</div>




<div class="wrap-input100 input100-select">
	<span class="label-input100">Prenda</span>
	<div>
		<select name="prenda" class="selection-2" >

      <?php
        $prenditas = [];
       try {
         $db = new PDO($dsn, $user, $pass);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $consulta = $db->prepare("SELECT prenda, id FROM prendas");
         $consulta->execute();
         $prenditas = $consulta->fetchAll(PDO::FETCH_ASSOC);
       } catch (Exception $e) {
         $error = true;
       }
       ?>


       <option value="-1"> Seleccionar Prenda</option>
       <?php foreach ($prenditas as $prendita): ?>
         <option value="<?= $prendita["id"] ; ?>"><?= $prendita["prenda"]; ?></option>
           <?php endforeach; ?>
		</select>
	</div>
	<span class="focus-input100"></span>
</div>

<div class="wrap-input100 input100-select">
	<span class="label-input100">Talles</span>
	<div>
		<select class="selection-2" name="talle">

      <?php
        $tallos = [];
       try {
         $db = new PDO($dsn, $user, $pass);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $consulta = $db->prepare("SELECT talle, id FROM talles");
         $consulta->execute();
         $tallos = $consulta->fetchAll(PDO::FETCH_ASSOC);
       } catch (Exception $e) {
         $error = true;
       }
       ?>

       <option value="-1"> Seleccionar Talle</option>
       <?php foreach ($tallos as $tallo): ?>
         <option value="<?= $tallo["id"] ; ?>"><?= $tallo["talle"]; ?></option>
           <?php endforeach; ?>
					</select>
	</div>
	<span class="focus-input100"></span>
</div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Descripcipón del Producto</span>
					<input type="text" name="descripcion" placeholder="Ingrese Descripción" class="form-control <?= isset($errorsInRegister['descripcion']) ? 'is-invalid' : null ?>"
          value="<?= $descripcion; ?>"
          >
          <div class="invalid-feedback">
           <?= isset($errorsInRegister['descripcion']) ? $errorsInRegister['descripcion'] : null; ?>
         </div>
          </div>

				<div class="wrap-input100 validate-input">
					<span class="label-input100">Precio del producto</span>
					<input type="text" name="precio" placeholder="Ingrese Precio" class="form-control <?= isset($errorsInRegister['precio']) ? 'is-invalid' : null ?>"
          value="<?= $precio; ?>"
          >
          <div class="invalid-feedback">
           <?= isset($errorsInRegister['precio']) ? $errorsInRegister['precio'] : null; ?>
         </div>
          </div>

				<div class="wrap-input100 validate-input" >
					<span class="label-input100">Cantidad</span>
					<input type="text" name="cantidad" placeholder="Ingrese Cantidad" class="form-control <?= isset($errorsInRegister['cantidad']) ? 'is-invalid' : null ?>"
          value="<?= $cantidad; ?>"
          >
          <div class="invalid-feedback">
           <?= isset($errorsInRegister['cantidad']) ? $errorsInRegister['cantidad'] : null; ?>
         </div>
          </div>

					<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Confirmar
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
