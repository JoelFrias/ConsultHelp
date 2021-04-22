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
                <script src="js/java.js"></script>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Consult Help</title>
                <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
                <style>
                    .dataTables_filter input{
                     background-color: #fff;
                     border: 2px solid rgb(55, 122, 223);
                     margin: 20px;
                     border-radius: 8px;
                     height: 25px;
                     outline: none;
                    }

                    .dataTables_filter label{
                        position: relative;
                        left: 31%;
                        top: 10px;
                    }

                    .dataTables_length select{
                        width: auto;
                        display: inline-block;
                    }
                    .dataTables_length label{
                        position: relative;
                        top: 56px;
                        right: 33%;
                    }
                    .dataTables_info{
                        position: relative;
                        right: 34%;
                        top: 10px;
                    }
                  
                    .paginate_button{
                        display: inline-block;
                        word-spacing: 0.20rem;
                    }
                   .pagination{
                       position: relative;
                       left: 34%;
                       border: 1px solid black;
                       border-radius: 5px;
                       width: 150px;
                       height: auto;
                   }
                   .pagination li a{
                       color: black;
                       font-size: 11px
                   }
                   .pagination li{
                       margin: 3px;
                       padding: 2.5px;
                   }
                   .active{
                       background-color: rgb(55, 122, 223);
                       border-radius: 5px;
                       width: 15px
                   }
                   li.paginate_button.page-item{
                        border-left: 1px solid black;
                        border-right: 1px solid black;
                   }
                   li.paginate_button.page-item.previous{
                        border-left: 0px solid black;
                        border-right: 0px solid black;
                   }
                   
                   li.paginate_button.page-item.next{
                        border-left: 0px solid black;
                        border-right: 0px solid black;
                    }
                    #mostrar-consultas h1{
                        position: relative;
                        top: 50px;
                    }
                </style>
            </head>
            <body>

            <?php require 'header.php' ?><br><br><br><br>
            <div id="mostrar-consultas" align="center">
                            <h1>Todos los pacientes:</h1>
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

                                    if (!empty($_GET['namee'])){
                                                                        
                                        $namee = $_GET['namee'];
                                        $sql = "SELECT * FROM pacientes WHERE Nombre  ";

                                    }else{

                                        $sql = "SELECT * FROM pacientes";

                                    }

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


                        </div> <br><br>

                        <script src="https://code.jquery.com/jquery-3.5.1.js"></script> 
                        <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> 
                        <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script> 

                        <script>
                        
                        $(document).ready(function() {
                            $('#tabla').DataTable();
                        } );
                        
                        </script>
                            
        <?php require 'footer.html' ?>

        

    </body>
</html>