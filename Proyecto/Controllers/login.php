<?php 
	require_once './../conexiones/conexion.php';

if($_POST['user'] != "" && $_POST['pass'] != "")
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$login_query = "SELECT * FROM usuarios WHERE nombre = '".$user."' AND password = '".$pass."'";

	if(mysqli_fetch_assoc($conexion->query($login_query)))
	{
		$_SESSION['user'] = $user;
		echo "<h1>Hola ".$user." bienvenido</h1>";
	}else{
		header("Location: ./../index.html");	
	}
}else{
	header("Location: ./../index.html");
}
 ?>