<?php
require_once("../conexion_base_de_datos/db.php");


if(session_status() !== PHP_SESSION_ACTIVE){
    session_start();
}


$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';

if(!empty($email) && !empty($password)) {
    $stmt = $conx->prepare("SELECT * FROM administradores WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$resultado = $stmt->get_result();
$stmt->close();

$usuario = $resultado->fetch_object();
//var_dump($usuario);
if($usuario === NULL) {
    echo '<p style="color: red;">Usuario i/o contraseña incorrecto</p>';
}else{
    $_SESSION['id'] = $usuario->id;
    header("Location: ../operaciones_crud/listado.php");
    exit();
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar session</title>
</head>
<body>
    <h2>Iniciar session como administrador</h2>
<form method="POST">
    <fieldset>
        <div>
        <label for="email">Email</label>
        </div><div>
        <input type="email" name="email" id="email" required>
        </div><div>
            <label for="password">Contraseña</label>
        </div><div>
            <input type="password" name="password" id="password">
            <button type="button" class="toggle-password" 
                        onmousedown="mostrar()" 
                        onmouseup="ocultar()" 
                        onmouseleave="ocultar()">👁️</button>
       </div><br>
        <input type="submit" >
    </fieldset>
</form>    


<script src="passwordMostrar.js"></script>
</body>
</html>