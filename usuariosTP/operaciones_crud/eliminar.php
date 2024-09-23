<?php
print_r($_POST);
$id = $_GET['id'];
include("../conexion_base_de_datos/db.php");
$stmt = $conx->prepare("DELETE FROM usuariosTP WHERE id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
header("Location: listado.php");
?>