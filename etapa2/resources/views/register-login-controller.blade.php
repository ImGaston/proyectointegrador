<?php

	session_start();

	define('ALLOWED_IMAGE_FORMATS', ['jpg', 'jpeg', 'png', 'gif']);
	define('IMAGE_PATH', dirname(__FILE__) . '/data/avatars/');
	define('USERS_JSON_PATH', dirname(__FILE__) . '/usuarios.json');


	if ( isset($_COOKIE['userLoged']) && !isLogged() ) {
		$theUser = getUserByEmail($_COOKIE['userLoged']);

		$_SESSION['userLoged'] = $theUser;
	}

	function registerValidate(){
		$errors = [];

		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$lastName = trim($_POST['lastName']);
		$password = trim($_POST['password']);
		$rePassword = trim($_POST['rePassword']);
		$avatar = $_FILES['avatar'];

		if ( empty($name) ) {
			$errors['name'] = 'Campo obligatorio';
		}

		if ( empty($lastName) ) {
			$errors['lastName'] = 'Campo obligatorio';
		}

		if ( empty($email) ) {
			$errors['email'] = 'Campo obligatorio';
		} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) { // Si el campo $email NO es un formato de email válido
			$errors['email'] = 'Introducí un formato de email válido';
		} elseif ( emailExist($email) ) { // Si el email ya existe, es porque alguien ya se registró con el mismo
			$errors['email'] = 'Ese correo ya está registrado';
		}

		if ( empty($password) ) {
			$errors['password'] = 'Campo obligatorio';
		}

		if ( empty($rePassword) ) {
			$errors['rePassword'] = 'Campo obligatorio';
		} elseif ($password != $rePassword) { // Si el valor de los campos $password y $rePassword son distintos
			$errors['password'] = 'Las contraseñas no coinciden';
			$errors['rePassword'] = 'Las contraseñas no coinciden';
		}

		if ( $avatar['error'] != UPLOAD_ERR_OK ) {
		$errors['avatar'] = 'Subí tu imagen';
	 } else {
		$ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);

			if ( !in_array($ext, ALLOWED_IMAGE_FORMATS) ) {
				$errors['avatar'] = 'Los formatos permitidos son JPG, PNG y GIF';
		 	}
		 }

		return $errors;
	}

		function registerEdit(){
		$errors = [];

		$name = trim($_POST['name']);
		$email = trim($_POST['email']);
		$lastName = trim($_POST['lastName']);
		$password = trim($_POST['password']);
		$rePassword = trim($_POST['rePassword']);
		$avatar = $_FILES['avatar'];

		if ( empty($name) ) {
			$errors['name'] = 'Campo obligatorio';
		}

		if ( empty($lastName) ) {
			$errors['lastName'] = 'Campo obligatorio';
		}

		if ( empty($email) ) {
			$errors['email'] = 'Campo obligatorio';
		} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
			$errors['email'] = 'Introducí un formato de email válido';
		}


		if ( empty($password) ) {
			$errors['password'] = 'Campo obligatorio';
		}

			if ( empty($rePassword) ) {
			$errors['rePassword'] = 'Campo obligatorio';
		} elseif ($password != $rePassword) {
			$errors['password'] = 'Las contraseñas no coinciden';
			$errors['rePassword'] = 'Las contraseñas no coinciden';
		}


		if ( $avatar['error'] != UPLOAD_ERR_OK ) {
		$errors['avatar'] = 'Subí una nueva imagen';
	 } else {

		$ext = pathinfo($avatar['name'], PATHINFO_EXTENSION);

			if ( !in_array($ext, ALLOWED_IMAGE_FORMATS) ) {
				$errors['avatar'] = 'Los formatos permitidos son JPG, PNG y GIF';
			}
		 }

		return $errors;
	}

	function saveImage() {
		$ext = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);

		$tempFile = $_FILES['avatar']['tmp_name'];

		$finalName = uniqid('img_') . '.' . $ext;

		$finalPath = IMAGE_PATH . $finalName;

		move_uploaded_file($tempFile, $finalPath);

		return $finalName;
	}

	function generateID() {
		$allUsers = getAllUsers();
		if ( count($allUsers) == 0 ) {
			return 1;
		}
		$lastUser = array_pop($allUsers);

		return $lastUser['id'] + 1;
	}

	function getAllUsers() {
		$fileContent = file_get_contents(USERS_JSON_PATH);
		$allUsers = json_decode($fileContent, true);
		return $allUsers;
	}
	function saveUser() {
		$_POST['name'] = trim($_POST['name']);
		$_POST['email'] = trim($_POST['email']);
		$_POST['password'] = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
		$_POST['id'] = generateID();
		unset($_POST['rePassword']);
		$finalUser = $_POST;
		$allUsers = getAllUsers();
		$allUsers[] = $finalUser;
		file_put_contents(USERS_JSON_PATH, json_encode($allUsers));
		return $finalUser;
	}

	function login($user) {
		unset($user['password']);
		$_SESSION['userLoged'] = $user;
		header('location: perfil.php');
		exit;
	}

	function isLogged() {
		return isset($_SESSION['userLoged']);
	}

		function emailExist($email) {
		$allUsers = getAllUsers();
		if(!empty ($allUsers)){
		foreach ($allUsers as $oneUser) {
			if ($oneUser['email'] == $email) {
				return true;
			}
		}
	}
}

		function emailExist1($email1) {
			$allUsers = getAllUsers();
			if(!empty ($allUsers)){
			foreach ($allUsers as $oneUser) {
				if ($oneUser['email'] == $email1) {
					return true;
				}
			}
		return false;
	}
}


	function loginValidate() {
		$errors = [];
		$email = trim($_POST['email']);
		$password = trim($_POST['password']);
		if ( empty($email) ) {
			$errors['email'] = 'El campo email es obligatorio';
		} elseif ( !filter_var($email, FILTER_VALIDATE_EMAIL) ) {
			$errors['email'] = 'Introducí un formato de email válido';
		} elseif ( !emailExist($email) ) {
			$errors['email'] = 'El usuario y contraseña no coinciden';
		} else {
			$theUser = getUserByEmail($email);
			if ( !password_verify($password, $theUser['password']) ) {
				$errors['password'] = 'Las credenciales no coinciden';
			}
		}
		if ( empty($password) ) {
			$errors['password'] = 'El campo password es obligatorio';
		}
		return $errors;
	}
	function loginForget() {
		$errors = [];

		$email1 = trim($_GET['email1']);
		if ( empty($email1) ) {
			$errors['email1'] = 'El campo email es obligatorio';
		} elseif ( !filter_var($email1, FILTER_VALIDATE_EMAIL) ) {
			$errors['email1'] = 'Introducí un formato de email válido';
		} elseif (emailExist1($email1) ) {
			$errors['email1'] = 'El email no se encuentra registrado';
		} else {
			return $errors;
	}
}

	function getUserByEmail($email){
		$allUsers = getAllUsers();
		foreach ($allUsers as $oneUser) {
			if ($oneUser['email'] == $email) {
				return $oneUser;
			}
		}
	}

	function editUser($email){
		$allUsers = getAllUsers();
		foreach ($allUsers as $position => $oneUser) {
			if ($oneUser['email'] == $email) {
				$userPosition = $position;
				$theUser = $oneUser;
			}
		}

		$theUser['name'] = $_POST['name'];
		$theUser['email'] = $_SESSION['userLoged']['email']; // El email siempre será el mismo
		$theUser['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
		$theUser['country'] = $_POST['country'];
		$theUser['avatar'] = $_POST['avatar'];
		$allUsers[$userPosition] = $theUser;
		file_put_contents("usuarios.json", json_encode($allUsers));
		return $theUser;
	}


	function debug($dato) {
		echo "<pre>";
		var_dump($dato);
		echo "</pre>";
		exit;
	}
