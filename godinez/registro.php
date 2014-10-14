<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/micss.css">
	<meta charset="UTF-8">
	<title>Pagina tarea</title>
</head>
<body>

	<div class="row headermio" > <!--header-->
		<div class="page-header col-md-8 col-xs-8">
				<h1>Bienvenido a<small>   la tienda prebe</small></h1>
		</div>
		<div class="col-md-4 col-xs-4 row"> 
			<br><br><br><br>
			<form action="#">
			<div class="col-md-5 col-xs-5">
					<INPUT type="text" class="form-control" placeholder="Usuario">
			</div>
			<div class="col-md-5 col-xs-5">
					<INPUT type="text" class="form-control" placeholder="Password">
			</div>
			<div class="col-md-2 col-xs-2">
				<input type="submit" class="btn btn-succes" placeholder="adf">
			</div>
			</form>
		</div>
	</div> <!--fin del header-->
	
	<br><br>
	<div class="row"> <!--barra de navegacion-->
		<div class="col-md-1 col-xs-1"></div>
		<div class="col-md-11 col-xs-11">
			<div class="btn-group btn-group-lg">
				<button type="button" class="btn btn-default btnGrande"><a href="index.html">Home</a></button>
				<button type="button" class="btn btn-default btnGrande"><a href="articulos.html">Artículos</a></button>
				<button type="button" class="btn btn-default btnGrande"><a href="contacto.html">Contacto</a></button>
			</div>
		</div>
	</div>
	

	<div class="row">
		<div class="col-md-3 col-xs-3">
			<img src="img/torre.jpg" class="img-responsive">
		</div>
		<div class="col-md-3 col-xs-3">	
			<img src="img/torre.jpg" class="img-responsive">
		</div>
		<div class="col-md-5 col-xs-5">
			<legend>Registrate</legend>
			<form action="validarRegistro.php" method="post">
				<input type="text" class="form-control" name="usuario" placeholder="Usuario">
				<br><br>
				<input type="text" class="form-control" name="e-mail" placeholder="e-mail">
				<br><br>
				<input type="text" class="form-control" name="pais" placeholder="País">
				<br><br>
				<input type="text" class="form-control" name="ciudad" placeholder="Ciudad">
				<br><br>
				<input type="password" class="form-control" name="password" placeholder="Password">
				<br>
				<input type="submit" class="btn btn-success">
			</form>
		</div>
	</div>

	<br><br>
</body>
</html>		