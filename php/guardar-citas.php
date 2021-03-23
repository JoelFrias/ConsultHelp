<?php

    require 'conexion.php';

    $Nombre = $_POST['Nombre'];
    $Email = $_POST['Email'];
    $Telefono = $_POST['Telefono'];
    $Hora = $_POST['Hora'];
    $Fecha = $_POST['Fecha'];
    $Aseguradora = $_POST['Aseguradora'];
    $Detalles = $_POST['Detalles'];
    
    mysqli_query($conexion, "INSERT INTO citas VALUES ('','$Nombre','$Email','$Telefono','$Fecha','$Hora','$Aseguradora','$Detalles')");

    sleep(1);

    header('location: ../index.php#citas');

?>