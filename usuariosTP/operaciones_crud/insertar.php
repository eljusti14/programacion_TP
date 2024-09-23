<?php
print_r($_POST);
$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';
$apellido = isset($_POST['apellido']) ? $_POST['apellido'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$numero_celular = isset($_POST['numero_celular']) ? $_POST['numero_celular'] : '';
$fecha_nacimiento = isset($_POST['fecha_nacimiento']) ? $_POST['fecha_nacimiento'] : '';
include("../conexion_base_de_datos/db.php");
$stmt = $conx->prepare("INSERT INTO usuariosTP (nombre, apellido, password, email, numero_celular, fecha_nacimiento) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $nombre, $apellido, $password, $email, $numero_celular, $fecha_nacimiento);
$stmt->execute();
$stmt->close();
header("Location: ../operaciones_crud/listado.php");
?>