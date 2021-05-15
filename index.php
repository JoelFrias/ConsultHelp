<?php

    session_start();

    $usuario = $_SESSION['username'];

    if(isset($usuario)){

    require 'php/conexion.php';

?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/citas.css">
        <script src="js/java.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consult Help</title>
        <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
    </head>
    <body>

        <?php require 'header.php' ?>
            
        <section id="hero">
            <div class="hero container">

                <div>

                    <h1>La mejor<span></span></h1>
                    <h1>Plataforma de <span></span></h1>
                    <h1>Consultas Online<span></span></h1>
                    <a href="pacientes.php" type="button" class="cta">Añadir Paciente</a><br>
                    <a href="tabla.php" type="button" class="cta">Ver Citas</a>
                    <a href="consultas.php" type="button" class="cta">Crear Nueva Consulta</a><br>

                    <p><h2 id="p">"Tu necesidad es nuestra prioridad"</h2></p>

                </div>

                <img id="asd" name="asd" src="img/register.svg" alt="">

            </div>
        </section>

        <?php require 'footer.html' ?>
                
    </body>
</html>

<?php

    }
    else{
        header('location: inicio.php');
    }
    
?>