<?php 

    require 'conexion.php';

    $nombre = $_POST['nombre_cita'];
    $electro = $_POST['checkbox1'];
    $endos = $_POST['checkbox2'];
    $chequeo = $_POST['checkbox3'];
    $terapia = $_POST['checkbox4'];
    $seguro = $_POST['sm'];
    $total = $_POST['Total'];

    $estudios = $electro.$endos.$chequeo.$terapia;

    mysqli_query($conexion,"INSERT INTO cobrarconsultas VALUE ('','$nombre','$estudios','$seguro','$total')");

    sleep(1);

    header('location: ../index.php#cobrar');

?>