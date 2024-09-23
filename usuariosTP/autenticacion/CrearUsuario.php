<?php
require("session.php");
require("../conexion_base_de_datos/db.php");
$stmt = $conx->prepare("SELECT * FROM usuariosTP WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>
</head>
<body>
    <form action="../operaciones_crud/insertar.php" method="POST">
        <h2>Crar Usuario</h2>
        <fieldset>
            <div>
                   <label for="nombre">Nombre</label>
             </div><div>
                   <input type="text" name="nombre" id="nombre" required>
             </div><div>
                   <label for="apellido">Apellido</label>
             </div><div>
                   <input type="text" name="apellido" id="apellido" required>
             </div><div>
                    <label for="email">Email</label>
             </div><div>
                    <input type="email" name="email" id="email" required>
                    <div style="color:red;" id="error-email" class="error"></div>
             </div><div>
                   <label for="password">Contraseña</label>
             </div><div>
                    <input type="password" name="password" id="password" required>
                    <div style="color:red;" id="error-password" class="error"></div>
             </div><div>
                    <label for="numero_celular">Numero de celular</label>
             </div><div>
                    <input type="text" name="numero_celular" id="numero_celular" required>
             </div><div>            
                    <label for="fecha_nacimiento">Fecha de nacimiento</label>
             </div><div>
                <input type="date" name="fecha_nacimiento" id="fecha_nacimiento" required>
             </div><br>
            <input type="submit" value="Crear Usuario">
        </fieldset>
    </form>
    <div>
        <a href="../operaciones_crud/listado.php">Salir</a>
    </div>
    <script src="../expresiones_regulares/expresionRegularCrear.js"></script>
</body>
</html>