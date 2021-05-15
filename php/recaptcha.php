<?php
    $recaptcha =  $_POST['g-recaptcha-response'];

    if($recaptcha != '' && !empty($_POST['Nombre']) && !empty($_POST['Fecha'])){
        $secret = "6LdZ4owaAAAAADNyz9zYAEEd5XRgRo8YeVeX-Ruz";
        $ip = $_SERVER['REMOTE_ADDR'];
        $var = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$recaptcha&remoteip=$ip");
        $array = json_decode($var, true);
        if($array['success']){
            
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

            header('location: ../invitado.php#citas');
            
        }else{

            ?>
                <script>
            
                alert('Por favor llenar todos los campos');
                window.location="../invitado.php#citas";
            
                </script>
            
            <?php
        
        }

    }else{

        ?>

            <script>
            
                alert('Por favor llenar todos los campos');
                window.location="../invitado.php#citas";
            
            </script>

    <?php } 
    
    ?>