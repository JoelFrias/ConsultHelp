<?php

require 'conexion.php';

session_start();

$usuario = $_POST['usuario'];
$clave = $_POST['clave'];

$un = "SELECT username FROM users WHERE email = '$usuario'";

$q = "SELECT COUNT(*) as contar from users where email = '$usuario' and password = '$clave' ";

$consulta = mysqli_query($conexion,$q);

$array = mysqli_fetch_array($consulta);

if($array['contar']>0){
    $_SESSION['username'] = $un; 
    header ("location: ../index.php");
}else{ ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Error al iniciar sesion</title>
        <link rel="shortcut icon" href="../img/logo/icono.ico" type="image/x-icon">
    </head>
    <body>
    <script> 
            alert("El correo electrónico o la contraseña son incorrectos"); 
            window.location='../login.php';
        </script>
    </body>
</html>

<?php } ?>