<?php

    require 'conexion.php';

    $nombre = $_POST['nombre-paciente'];
    $telefono = $_POST['telefono-paciente'];
    $email = $_POST['email-paciente'];
    $padecimientos = $_POST['padecimientos-paciente'];
    $detalles = $_POST['detalles-paciente'];
    $aseguradora = $_POST['aseguradora-paciente'];

    mysqli_query($conexion,"INSERT INTO pacientes VALUE ('','$nombre','$telefono','$email','$padecimientos','$detalles','$aseguradora')");

    sleep(1);

    header('location: ../pacientes.php')
?>