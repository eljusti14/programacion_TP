<?php
if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}

if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
  header("Location: ../autenticacion/login.php");
  exit();
}