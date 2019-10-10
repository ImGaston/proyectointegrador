<?php

	session_start();
	session_destroy();

	setcookie('userLoged', null, time() - 1);

	header('location: home.php');
	exit;
