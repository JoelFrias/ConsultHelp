<?php
$recaptcha =  $_POST['g-recaptcha-response'];

if($recaptcha != ''){
    $secret = "6LdZ4owaAAAAADNyz9zYAEEd5XRgRo8YeVeX-Ruz";
    $ip = $_SERVER['REMOTE_ADDR'];
    $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
    $array = json_decode($var, true);
    if($array['success']){
       header ('location:guardarcitas.php');
    }else{
       echo "Robot de mierda";
    }
}else{
    echo "rellene todos los campos";
}
?>
