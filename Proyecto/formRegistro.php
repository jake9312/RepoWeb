<!DOCTYPE html>
<html lang="es">
<head>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/micss.css">
	<meta charset="UTF-8">
	<title>Registro de usuario</title>
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
				<a href="index.html" class="btn btn-default btnGrande">Home</a>
				<a href="articulos.html" class="btn btn-default btnGrande">Artículos</a>
				<a href="contacto.html" class="btn btn-default btnGrande">Contacto</a>
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
			<form action="Controllers/registro.php" method="post">
				<input type="text" class="form-control" placeholder="Usuario" name="usuario">
				<br><br>
				<input type="text" class="form-control" placeholder="e-mail" name="email">
				<br><br>
				<input type="text" class="form-control" placeholder="País" name="pais">
				<br><br>
				<input type="text" class="form-control" placeholder="Ciudad" name="ciudad">
				<br><br>
				<input type="password" class="form-control" placeholder="Password" name="password">
				<br>
				<input type="submit" class="btn btn-success" value="Registrar">
			</form>
		</div>
	</div>
</body>
</html>