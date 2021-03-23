<?php

    require 'conexion.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    mysqli_query($conexion,"INSERT INTO users VALUES ('','$username','$email','$password')");

    header('location: ../login.php')

?>