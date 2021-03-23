<?php

    session_start();

    if (isset($_SESSION['username'])) {

    }else{
        header('location: index.php');
    }

    require 'php/conexion.php';

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/credits.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consult Help - Creditos</title>
</head>
<body>

    <?php require 'header.php'; ?>

    <div align="center" id="desa">
        <label><h1>Desarrolladores</h1></label>
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="team-item">
                    <div class="img-box">
                        <img src="img/credits/1.jpg" alt="Joel Frias">
                        <div class="social-links">
                            <a href="https://www.facebook.com/j0elfrias/" target="_blank" rel="noopener noreferrer">Facebook</a>
                            <a href="https://www.instagram.com/joelfrias_" target="_blank" rel="noopener noreferrer">Instagram</a>
                        </div>
                    </div>
                    <h3>Franklin Joel Frías</h3>
                    <p>Ingeniero en sistemas</p>
                </div>
                <div class="team-item">
                    <div class="img-box">
                        <img src="img/credits/2.jpeg" alt="Loranny Beltre">
                        <div class="social-links">
                            <a href="https://www.facebook.com/LorannyBelt" target="_blank" rel="noopener noreferrer">Facebook</a>
                            <a href="https://www.instagram.com/loraabelt/" target="_blank" rel="noopener noreferrer">Instagram</a>
                        </div>
                    </div>
                    <h3>Loranny Beltre</h3>
                    <p>Analísta de datos</p>
                </div>
                <div class="team-item">
                    <div class="img-box">
                        <img src="img/credits/3.jpeg" alt="Alexander Castro">
                        <div class="social-links">
                            <a href="https://www.facebook.com/profile.php?id=100047112375156" target="_blank" rel="noopener noreferrer">Facebook</a>
                            <a href="https://www.instagram.com/23._.alexander/" target="_blank" rel="noopener noreferrer">Instagram</a>
                        </div>
                    </div>
                    <h3>Alexander Castro</h3>
                    <p>El css's</p>
                </div>
            </div>
        </div>
    </section>
</body>
</html>