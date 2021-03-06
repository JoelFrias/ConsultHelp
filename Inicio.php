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
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/citas.css">
        <link href="https://chatcompose.azureedge.net/static/all/global/export/css/main.5b1bd1fd.css" rel="stylesheet"> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Inicio - Iniciar Sesión</title>
        <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
    </head>
    <body>

        <section id="header">
            <div class="header container">
                <div class="nav-bar">
                    <div class="brand">
                        <a href="index.php"><h1><span>C</span>onsult <span>H</span>elp</h1></a>
                    </div>
                </div>
            </div>
        </section>

        <section id="hero">
            <div class="hero container">

                <div>
                    <h1>La mejor<span></span></h1>
                    <h1>Plataforma de <span></span></h1>
                    <h1>Consultas Online<span></span></h1>
                    <a href="login.php" type="button" class="cta">Iniciar Sesión</a>
                    <a href="invitado.php" type="button" class="cta">Entrar como Paciente</a>
                    <div id="p">
                    <p><h2 id="p">"Tu necesidad es nuestra prioridad"</h2></p>
                    </div>
                </div>

                <img id="asd" name="asd"src="img/imagen.svg" alt="">
            </div>
        </section>

        <script async type="text/javascript" src="https://chatcompose.azureedge.net/static/all/global/export/js/main.a7059cb5.js?user=JAL2310&lang=ES" user="JAL2310" lang="ES"></script>

    </body>
</html>