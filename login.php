<?php
session_start();
if (isset($_SESSION['username'])) {
  header('location: index.php');
}
require 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <title>Login - Consult Help</title>
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
</head>
<body>
    <div class="container">
        <div class="form-container"></div>

        <div class="panels-container">
            <div class="signin-signup">
                <form action="php/loguear.php" method="POST" class="sign-in-form">
                    <h2 class="title">Iniciar Sesión</h2>
                     <div class="input-field">
                         <i class="fas fa-user"></i>
                         <input autocomplete="off" type="email" placeholder="Email" name="usuario" id="email">
                     </div>
                     <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input autocomplete="off" type="password" placeholder="Password" name="clave" id="password">
                    </div>
                    <img src="img/mostrar.png" alt="ojo" id="boton" style="width: 30px; cursor: pointer;">
                    <input type="submit" value="Entrar" class="btn solid">

                    <p class="social-text">"Tu necesidad es nuestra Prioridad"</p>
                </form>
            </div>
        </div>
  
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                     <a href="index.php"><button class="btn transparent" id="sign-up-btn">Volver al Inicio</button></a>
                </div>

                <img src="img/log.svg" class="image" alt="Doctor - Medicina - Medico">
            </div>
        </div>

    </div>

    <script src="js/java.js"></script>
    <script src="js/app.js"></script>
    
</body>
</html>