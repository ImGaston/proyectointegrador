<?php

$host = '127.0.0.1';
$port = 3306;
$dbName = 'pitagoras';

$dsn = "mysql:host=$host;port=$port;dbname=$dbName;charset=utf8";
$user = 'root';
$pass = '';

$error = false;

$errorsInRegister = [];

$producto = '';

if ($_POST) {

$producto = trim($_POST["producto"]);

    try {
      $db = new PDO($dsn, $user, $pass);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $consulta = $db->prepare("DELETE FROM productos where id = :producto)");
      $consulta -> bindValue(":producto", $producto);
      $consulta->execute();
      	header('location: exito1.php');
    } catch (Exception $e) {
      $error = true;
      var_dump($e);exit;
      header('location: error.php');

    }

    }






 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Baja Productos | Pitagoras </title>
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
			<form class="" action="borrar.php" method="post">
				<span class="contact100-form-title">
Baja Productos Pitágoras				</span>

<div class="wrap-input100 input100-select">
	<span class="label-input100">Productos</span>
	<div>
		<select class="selection-2" name="producto">

      <?php
        $cates = [];
       try {
         $db = new PDO($dsn, $user, $pass);
         $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $consulta = $db->prepare("SELECT descripcion, id FROM productos");
         $consulta->execute();
         $cates = $consulta->fetchAll(PDO::FETCH_ASSOC);
       } catch (Exception $e) {
         $error = true;
       }
       ?>

       <option value="-1"> Seleccionar Producto a borrar</option>
       <?php foreach ($cates as $cate): ?>
         <option value="<?= $cate["id"] ; ?>"><?= $cate["descripcion"]; ?></option>
           <?php endforeach; ?>
		</select>
	</div>
	<span class="focus-input100"></span>
</div>






					<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Borrar
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
