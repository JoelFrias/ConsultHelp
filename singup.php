<?php

  session_start();

  if (isset($_SESSION['username'])) {
    header('location: index.php');
  }

  require 'php/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/register.css">
    <title>Register - Consult Help</title>
  </head>
  <body>
    <div id="jeje">

      <h2>Regístrate</h2>

      <form action="php/register.php" method="POST" align="center">

        <input autocomplete="off" type="text" name="username" placeholder="Username"><br>
        <input autocomplete="off" type="email" name="email" placeholder="Email"><br>
        <input autocomplete="off" type="password" name="password" id="password" placeholder="Contraseña">

        <img src="img/mostrar.png" alt="ojo" id="boton">

        <br>

        <input type="submit" value="Registrar">

      </form>

      <p align="center">¿Ya Tienes una Cuenta?  <a href="login.php"><b>Inicia Sesión</b></a></p>

    </div>

    <script src="js/app.js"></script>
  </body>
</html>