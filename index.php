<?php

    session_start();

    $usuario = $_SESSION['username'];

    if(!isset($usuario)){
        header('location: index2.php');
    }
    else{
        header('location: index1.php');
    }
    
?>