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

                <a href="credit.html"><input  id="fff" type="button" value="Doctores"></a>

                <a href="php/salir.php"><button style="width:110px;">Cerrar Sesión</button></a>
                
            </div>
        </div>
    </section>
</body>
</html>