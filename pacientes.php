<?php

    session_start();

    $usuario = $_SESSION['username'];

    if(!isset($usuario)){
        header('location:index.html');
    }

    require 'php/conexion.php';

    if (!empty($_POST['nombre-paciente']) && !empty($_POST['telefono-paciente']) && !empty($_POST['email-paciente'])) {

        $nombre = $_POST['nombre-paciente'];
        $telefono = $_POST['telefono-paciente'];
        $email = $_POST['email-paciente'];
        $padecimientos = $_POST['padecimientos-paciente'];
        $detalles = $_POST['detalles-paciente'];
        $aseguradora = $_POST['aseguradora-paciente'];
    
        mysqli_query($conexion,"INSERT INTO pacientes VALUE ('','$nombre','$telefono','$email','$padecimientos','$detalles','$aseguradora')");

        $message = "Paciente agregado correctamente";

    }else{
        
        $message = "Favor de llenar todos los campos";

    }

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/citas.css">
        <link rel="stylesheet" href="css/menu.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consult Help</title>
        <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
    </head>
    <body>

        <?php require 'header.php' ?>

        <br><br>

        <div class="container">
            <div class="row">
                <div id="añadir-paciente">
                    <form action="" method="post"><br><br>
                        <div align="center">
                            <img  style="width: 60px; height: 60px;" src="img/icono.png" alt="Icono Consult Help">
                        </div>

                        <h1>Agregar Nuevo Paciente</h1>

                        <?php if(!empty($message)): ?>

                            <div align="center">
                                <p> <?= $message ?></p>
                            </div>

                        <?php endif; ?>

                        <div id="div-nombre-paciente">
                            <label for="">Nombre del paciente:</label>
                            <input type="text" autocomplete="off" name="nombre-paciente" id="nombre-paciente"><br>
                        </div>

                        <div id="div-telefono-paciente">
                            <label for="">Telefono del paciente:</label>
                            <input type="tel" autocomplete="off" name="telefono-paciente" id="telefono-paciente"><br>
                        </div>

                        <div id="div-email-paciente">
                            <label for="">Email del paciente:</label>
                            <input type="email" autocomplete="off" name="email-paciente" id="email-paciente"><br>
                        </div>

                        <div id="div-padecimientos-paciente">
                            <label for="">Padecimientos:</label>
                            <input type="text" autocomplete="off" name="padecimientos-paciente" id="padecimiento-paciente">
                        </div>

                        <div id="div-detalles-paciente">
                            <label for="">Detalles:</label><br>
                            <textarea name="detalles-paciente" id="detalles-paciente" cols="25" rows="7"></textarea><br>
                        </div>

                        <div id="div-aseguradora-paciente">
                            <label for="">Aseguradora:</label>
                            <input type="text" autocomplete="off" name="aseguradora-paciente" id="aseguradora-paciente"><br>
                        </div>
                                
                        <div id="botones1" align="center">
                            <input type="reset" value="Borrar" style="width: 70px;">
                            <button type="submit" style="width: 70px;">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

        <?php require 'footer.html' ?>

        <script src="js/java.js"></script>
    
    </body>
</html>