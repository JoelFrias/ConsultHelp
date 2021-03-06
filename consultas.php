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
                <link rel="stylesheet" href="css/citas.css">
                <link rel="stylesheet" href="css/menu.css">
                <link rel="stylesheet" href="css/select2.css">
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
                <title>Consult Help</title>
            </head>
            <body>

                <?php require 'header.php' ?><br><br><br><br>
                <a name="crear"></a>
                <div class="container">
                    <div class="row">
                        <div id="crea-cita">
                            <form action="php/guardar-citas.php" method="POST" name="" id="form1"><br>

                                <div id="frente" align="center">
                                    <img  style="width: 60px; height: 60px;" src="img/icono.png" alt="Icono Consult Help">
                                    <h1>Nueva Cita</h1><br><br>
                                </div>

                                <div id="nom">

                                    <label for="">Buscar paciente:<br>
                                    
                                    <section>

		                                <select id="selectpaciente">

                                            <option value="--">Seleccionar</option>

                                            <?php

                                                include 'php/conexion.php';

                                                $sql = "SELECT * FROM pacientes";
                                                $execute = mysqli_query($conexion,$sql);

                                                while ($resultados=mysqli_fetch_array($execute)){

                                            ?>

                                            <option id='option-<?php echo $resultados["Id"]?>' value="<?php echo htmlspecialchars(json_encode($resultados), ENT_QUOTES, 'UTF-8')?>"><?php echo $resultados['Nombre']?></option>

                                            <?php } ?>
                                            
                                        </select>
                                    </label>
                                </div><br><br>

                                <div id="nom">
                                    <label for="">Nombre del paciente:</label><br>
                                    <input autocomplete="off" type="text" name="Nombre" id="Nombre"><br><br>
                                </div>
                                <div id="emai">
                                    <label>Email:</label> <br>
                                    <input autocomplete="off" type="email" name="Email" value="" id="Email"/><br><br>
                                </div>

                                <div id="tel">
                                    <label>Telefono:</label> <br>
                                    <input autocomplete="off" type="tel" name="Telefono" value="" id="Telefono"/><br><br>
                                </div>
                                <div id="asegu">
                                    <br><br>
                                    <label for="">Aseguradora:</label>
                                    <input autocomplete="off" type="text" name="Aseguradora" value="" id="Aseguradora"/>
                                </div>
                                
                                <div id="detalles">
                                    <label for="">Detalles</label>
                                    <input autocomplete="off"  type="text" name="Detalles" value="" id="Detalles"/><br>
                                </div>
                                <div id="botones1" align="center">
                                    <input type="reset" value="Borrar" style="width: 70px;">
                                    <button type="submit" onclick="" style="width: 70px;">Guardar</button>
                                </div>
                                <div id="hura">
                                    <label>Hora:</label><br>
                                    <input autocomplete="off" type="time" name="Hora" value="" id="Hora"/><br><br>
                                </div>

                                <div id="dote">
                                    <label>Fecha:</label><br>
                                    <input autocomplete="off" type="date" name="Fecha" value="" id="Fecha"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <br><br><br><br>
                <?php require 'footer.html' ?>

            </body>
            
        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/select2.js"></script>
        <script src="js/java.js"></script>

        <script>

            $(document).ready(function(){

                $('#selectpaciente').select2();
                $('#selectpaciente').on('select2:select',function(e){
                    
                    const data = JSON.parse(e.params.data.id);
                    Object.keys(data).forEach(function(key) {
                        var elemento = document.getElementById(key);
                        if (elemento) {
                            elemento.value = data[key];
                        }
                    })
                })
            })

        </script>
</html>