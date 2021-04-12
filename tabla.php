<?php

    session_start();

    $usuario = $_SESSION['username'];

    if(!isset($usuario)){
        header('location:index.html');
    }

    require 'php/conexion.php';


?>
        <!DOCTYPE html>
        <html lang="es">
            <head>
                <link rel="stylesheet" href="css/style.css">
                <link rel="stylesheet" href="css/citas.css">
                <link rel="stylesheet" href="css/menu.css">
                <script src="js/java.js"></script>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Consult Help</title>
                <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
            </head>
            <body>

                <?php require 'header.php' ?>

                <br><br><br><br><br><br><br>

                <a name="tabla1">

                <div id="mostrar-consultas" align="center">
                            <h1>Tabla de citas:</h1>
                            <table id="tabla" name="tabla">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre del Paciente</th>
                                        <th>Email</th>
                                        <th>Telefono</th>
                                        <th>Fecha</th>
                                        <th>Hora</th>
                                        <th>Aseguradora</th>
                                        <th>Detalles</th>
                                    </tr>
                                </thead>
                                
                                <?php

                                require 'php/conexion.php';

                                $sql = "SELECT * FROM citas";

                                $result = mysqli_query($conexion, $sql);

                                while($mostrar=mysqli_fetch_array($result)){

                                ?>
                                <tr>
                                
                                    <td><?php echo $mostrar['Id'] ?></td>
                                    <td><?php echo $mostrar['Nombre del paciente'] ?></td>
                                    <td><?php echo $mostrar['Email del paciente'] ?></td>
                                    <td><?php echo $mostrar['Telefono del paciente'] ?></td>
                                    <td><?php echo $mostrar['Fecha_citas'] ?></td>
                                    <td><?php echo $mostrar['Hora_citas'] ?></td>
                                    <td><?php echo $mostrar['Aseguradora'] ?></td>
                                    <td><?php echo $mostrar['Detalles'] ?></td>

                                </tr>

                                <?php } ?>
                                
                            </table>
                        </div>

            </body>
        </html>