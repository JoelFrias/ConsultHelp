<?php

    require 'php/conexion.php';

    $user = $_SESSION['username'];

    $sql = mysqli_query($conexion, $user);

    $username = $sql

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/citas.css">
        <link rel="stylesheet" href="css/menu.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consult Help</title>
        <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
    </head>
    <body>

        <section id="header">
            <div class="header container">
                <div class="nav-bar">
                    <div class="brand">
                        <a href="index.php"><h1><span>C</span>onsult <span>H</span>elp</h1></a>
                    </div>

                    <?php

                        foreach($conexion->query($_SESSION['username']) as $nosabetu);

                    ?>

                    <p id="aaa" style="color: white;"><?php echo $nosabetu['username']; ?></p>

                    <ul class="nav">

                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="pacientes.php">Pacientes</a>
                            <ul>
                                <li><a href="pacientes.php">Agregar paciente</a></li>
                                <li><a href="paciente.php">Ver pacientes</a></li>
                            </ul>
                        </li>

                        <li><a href="consultas.php">Consultas</a>

                            <ul>
                                <li><a href="consultas.php">Crear Cita</a></li>
                                <li><a href="cobrar.php">Cobrar Consulta</a></li>
                                <li><a href="tabla.php">Mostrar citas</a></li>
                            </ul>

                        </li>

                        <li><a href="credits.php">Doctores</a></li>
                        <li><a href="php/salir.php">Cerrar Sesión</a></li>

                    </ul>

                </div>
            </div>
        </section>
        
    </body>
</html>