<?php 
	require_once './../conexiones/conexion.php';

	$id = $_GET['id'];

	$borrar_query = "DELETE FROM usuarios WHERE id_usuario = ".$id;

	$conexion->query($borrar_query);

	header("Location: usuarios.php");


 ?>