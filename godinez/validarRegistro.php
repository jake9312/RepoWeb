<?php 

if(isset($_POST["usuario"]) && $_POST["usuario"] != "" && $_POST["e-mail"] !="" && $_POST["password"] !="" && $_POST["pais"] != "" && $_POST["ciudad"] !=""){
	$usuario = $_POST["usuario"];
	$email = $_POST["e-mail"];
	$pais = $_POST["pais"];
	$ciudad = $_POST["ciudad"];
	$password = $_POST["password"];

	echo "usuario:".$usuario;
	echo "<br>";
	echo "e-mail:".$email;
	echo "<br>";
	echo "pais:".$pais;
	echo "<br>";
	echo "ciudad:".$ciudad;
	echo "<br>";
	echo "password:".$password;
}

 ?>