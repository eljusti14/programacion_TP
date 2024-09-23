<?php

$conx = new mysqli("Localhost", "root", "", "primer_base_de_datos");

if($conx->connect_error){
    die("ERROR EN LA CONEXION". $conx->connect_error);
}

?>