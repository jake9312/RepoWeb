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