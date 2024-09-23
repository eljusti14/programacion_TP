<?php 
print_r($_POST);
$id = $_POST['id'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$password = $_POST['password'];
$numero_celular = $_POST['numero_celular'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
include("../conexion_base_de_datos/db.php");
$stmt = $conx->prepare("UPDATE usuariosTP SET nombre = ?, apellido = ?, email = ?, password = ?, numero_celular = ? WHERE id = ?;");
$stmt->bind_param("sssssi", $nombre, $apellido, $email, $password, $numero_celular, $id);
$stmt->execute();
$stmt->close();
header("Location: listado.php");
?>