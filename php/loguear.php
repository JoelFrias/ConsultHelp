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
}else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="../img/logo/icono.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error al iniciar sesión - Consulp Help</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
            text-align: center;
        }

        p{
            margin-top: 50px;
            font-size: 25px;
        }
        
        input{
            background: none;
            margin: 10px;
            border-radius: 5px;
            width: 300px;
            cursor: pointer;
            height: 30px;
            border-color: #fff;
            box-shadow:5px 5px 20px 0px #eee;
            -moz-box-shadow:5px 5px 20px 0px;
            -webkit-box-shadow:5px 5px 20px 0px;
        }
    </style>
</head>
<body>
    <p>Datos incorrectos</p>
    <a href="../login.php"> <input type="button" value="Volver a iniciar sesión"></a>
</body>
</html>

<?php } ?>