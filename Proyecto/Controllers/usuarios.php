<?php 
  require_once './../conexiones/conexion.php';

  $usuarios_query = "SELECT * FROM usuarios";
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
        <td>E-mail</td>
        <td>País</td>
        <td>Ciudad</td>
        <td>Password</td>
    </thead>
    <tbody>
      <?php while($usuarios_row = mysqli_fetch_assoc($usuarios_object)) {?>
      <tr>
        <td><?php echo $usuarios_row['id_usuario'] ?></td>
        <td><?php echo $usuarios_row['nombre'] ?></td>
        <td><?php echo $usuarios_row['email'] ?></td>
        <td><?php echo $usuarios_row['pais'] ?></td>
        <td><?php echo $usuarios_row['ciudad'] ?></td>
        <td><?php echo $usuarios_row['password'] ?></td>
        <td><a href="update.php?id=<?php echo $usuarios_row['id_usuario']?>" class="btn btn-success">Update</a></td>
        <td><a href="borrar.php?id=<?php echo $usuarios_row['id_usuario']; ?>" class="btn btn-info">Borrar</a></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
</div>
	
</body>
</html>