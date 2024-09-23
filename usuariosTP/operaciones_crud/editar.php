<?php
require("../autenticacion/session.php");
require("../conexion_base_de_datos/db.php");
$id = $_GET['id'];
$stmt = $conx->prepare("SELECT * FROM usuariosTP WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$usuarios = $resultado->fetch_object();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
</head>
<body>
    <h2>Editar usuario</h2>
    <form action="../operaciones_crud/guardar.php" method="POST">
        <fieldset>
            <input type="hidden" name="id" value="<?php  echo $usuarios->id; ?>">
            <div>
            <label for="nombre">Nombre</label>
            </div>
            <div>
            <input type="text" name="nombre" id="nombre" value="<?php echo $usuarios->nombre; ?>">
            </div><div>
            <label for="apellido">Apellido</label>
            </div><div>
            <input type="text" name="apellido" id="apellido" value="<?php echo $usuarios->apellido; ?>">
            </div><div>
            <label for="email">Email</label>
            </div><div>    
            <input type="email" name="email" id="email" value="<?php echo $usuarios->email; ?>">
            <div id="error-email" style="color: red;"></div>
            </div><div>
            <label for="password">Contraseña</label>
            </div><div>
            <input type="text" name="password" id="password" value="<?php echo $usuarios->password; ?>">
            <div id="error-password" style="color: red;"></div>
            </div><div>
            <label for="numero_celular">Numero de Celular</label>
            </div><div>
            <input type="text" name="numero_celular" id="numero_celular" value="<?php echo $usuarios->numero_celular; ?>">
            </div><div>
            <label for="fecha_nacimiento">Fecha de nacimiento</label>
            </div><div>
            <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" readonly value="<?php echo $usuarios->fecha_nacimiento; ?>">
            </div><br>
            <input type="submit" value="Editar">
        </fieldset>
    </form>
    <div>
        <a href="listado.php">Salir</a>
    </div>
    <script src="../expresiones_regulares/expresionRegularEditar.js"></script>
</body>
</html>