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
        <link rel="stylesheet" href="css/menu.css">
        <link rel="stylesheet" href="css/buscador.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consult Help</title>
        <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
    </head>
    <body>

        <?php require 'header.php' ?>
        
        <br><br><br><br>
        
        <div id="mostrar-consultas" align="center">

            <h1 style="position: relative; top: 50px;">Todos los pacientes:</h1>

            <table id="tabla" name="tabla" class="table table-striped table-bordered">

                <thead>

                    <th>Id</th>
                    <th>Nombre del Paciente</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Padecimientos</th>                                
                    <th>Detalles</th>
                    <th>Aseguradora</th>

                </thead>
                                
                <?php


                    $sql = "SELECT * FROM pacientes";
                                    
                    require 'php/conexion.php';

                    $result = mysqli_query($conexion, $sql);

                    while($mostrar=mysqli_fetch_array($result)){

                ?>
                                
                <tr>

                    <td><?php echo $mostrar['Id'] ?></td>
                    <td><?php echo $mostrar['Nombre'] ?></td>
                    <td><?php echo $mostrar['Telefono'] ?></td>
                    <td><?php echo $mostrar['Email'] ?></td>
                    <td><?php echo $mostrar['Padecimientos'] ?></td>
                    <td><?php echo $mostrar['Detalles'] ?></td>
                    <td><?php echo $mostrar['Aseguradora'] ?></td>

                </tr>

                <?php } ?>
                                
            </table>

        </div>
        
        <br><br>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> 
        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script> 
        <script src="js/java.js"></script>

        <script>
                        
            $(document).ready(function() {
                $('#tabla').DataTable();
            } );
                        
        </script>
                            
        <?php require 'footer.html' ?>
        
    </body>
</html>