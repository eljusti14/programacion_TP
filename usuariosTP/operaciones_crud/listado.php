<?php
require_once("../conexion_base_de_datos/db.php");
require_once("../validacion/validar.php");

$resultado = $conx->query("SELECT * FROM usuariosTP");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado</title>
</head>
<body>
    <h2>Listado de usuarios registrados</h2>
<table border="1">
    <thead>
         <tr>
         <th>ID</th>
         <th>Nombre</th>
         <th>Apellido</th>
         <th>Password</th>
         <th>Email</th>
         <th>Numero celular</th>
         <th>fecha de nacimiento</th>
         <th>Modificar</th>
         <th>Eliminar</th>
         </tr>
    </thead>
    <?php  while($fila = $resultado->fetch_object()) { ?>
       <tr>
       <td><?php echo $fila->id; ?></td>
       <td><?php echo $fila->nombre; ?></td>
       <td><?php echo $fila->apellido; ?></td>
       <td><?php echo $fila->password; ?></td>
       <td><?php echo $fila->email; ?></td>
       <td><?php echo $fila->numero_celular; ?></td>
       <td><?php echo $fila->fecha_nacimiento; ?></td>
       <td><a href="../operaciones_crud/editar.php?id=<?php echo $fila->id; ?>">Editar</a></td>
       <td><a href="../operaciones_crud/eliminar.php?id=<?php echo $fila->id; ?>" onclick="return confirm('¿Estás seguro de que quieres eliminar este usuario?');">Eliminar</a></td>
       </tr>
    <?php } ?>
</table>  
<h2>Crear un nuevo usuario</h2>
<a href="../autenticacion/CrearUsuario.php">Crear Usuario</a>
<h2>Cerrar Session</h2>
<a href="../autenticacion/cerrarSession.php">Cerrar Session</a>
</body>
</html>