<?php 
	require_once './../conexiones/conexion.php';

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$login_query = "SELECT * FROM users WHERE user = '".$user."' AND pass = '".$pass."'";

	if(mysqli_fetch_assoc($conexion->query($login_query)))
	{
		$_SESSION['user'] = $user;
		echo "<h1>Hola ".$user." bienvenido</h1>";
	}

 ?>