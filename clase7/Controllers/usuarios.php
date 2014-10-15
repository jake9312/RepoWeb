<?php 
  require_once './../conexiones/conexion.php';

  $usuarios_query = "SELECT * FROM users";
  $usuarios_object = $conexion->query($usuarios_query);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Usuarios</title>
  <link rel="stylesheet" href="./../css/bootstrap.css">
</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="./../index.php">Inicio</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="usuarios.php">Ver usuarios</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="row">
  <div class="container">
    <table class="table table-striped">
      <thead>
        <td>Id</td>
        <td>Nombre</td>
        <td>Pass</td>
        <td>Correo</td>
    </thead>
    <tbody>
      <?php while($usuarios_row = mysqli_fetch_assoc($usuarios_object)) {?>
      <tr>
        <td><?php echo $usuarios_row['id'] ?></td>
        <td><?php echo $usuarios_row['user'] ?></td>
        <td><?php echo $usuarios_row['pass'] ?></td>
        <td><?php echo $usuarios_row['mail'] ?></td>
        <td><a href="borrar.php?id=<?php echo $usuarios_row['id']; ?>" class="btn btn-info">Borrar</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
	
</body>
</html>