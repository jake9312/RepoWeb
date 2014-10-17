<?php 
	require_once './../conexiones/conexion.php'; //puedo usar todas las variables de conexion.php

	if($_POST['usuario'] != "" && $_POST['email'] != "" && $_POST['pais'] != "" && $_POST['ciudad'] != "" && $_POST['password'] != "")
	{
	
	$registro_query = "INSERT INTO usuarios(nombre,email,pais,ciudad,password) VALUES (
		'".$_POST['usuario']."',
		'".$_POST['email']."',
		'".$_POST['pais']."',
		'".$_POST['ciudad']."',
		'".$_POST['password']."'
		)";
	
	$registro_object = $conexion->query($registro_query);

	echo "Usuario Registrado";

	header("Location: ./../index.html");
	}else{
	header("Location: ./../formRegistro.php");
	}
	
 ?>