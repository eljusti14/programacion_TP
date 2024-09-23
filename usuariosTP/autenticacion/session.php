<?php
// Comprobar si la sesión está activa
if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// Verificar si el usuario está autenticado
if (!isset($_SESSION['id']) || empty($_SESSION['id'])) {
    header("Location: login.php");
    exit();
}
?>
