<?php

    session_start();

    if (isset($_SESSION['username'])) {

    }else{
        header('location: index.php');
    }

    require 'php/conexion.php';

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/citas.css">
        <script src="js/java.js"></script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Consult Help</title>
        <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
    </head>
    <body>
    <?php require 'header.php' ?>
    
        <section id="hero">
                <div class="hero container">
                    <div>
                        <h1>La mejor<span></span></h1>
                        <h1>Plataforma de <span></span></h1>
                        <h1>Consultas Online<span></span></h1>
                        <a href="#Agregar" type="button" class="cta">Añadir Paciente</a><br>
                        <a href="#citas" type="button" class="cta">Crear Nueva Consulta</a><br>
                        <a href="#tabla" type="button" class="cta">Ver Consultas</a>

                        <p><h2 id="p">"Tu necesidad es nuestra prioridad"</h2></p>
                    </div>
                    <img id="asd" name="asd" src="img/register.svg" alt="">
                </div>
            </section>
            <a name="citas">
        <br><br><br><br>

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

                                <select id="selectpaciente">                

                                    <option value="--">Selecciona un paciente</option>

                                    <?php

                                        include 'php/conexion.php';

                                        $sql = "SELECT * FROM pacientes";
                                        $execute = mysqli_query($conexion,$sql);

                                        while ($resultados=mysqli_fetch_array($execute)){

                                    ?>

                                    <option id='option-<?php echo $resultados["Id"]?>' value="<?php echo $resultados['Id']?>" data-pacientes="<?php echo htmlspecialchars(json_encode($resultados), ENT_QUOTES, 'UTF-8')?>"><?php echo $resultados['Nombre']?></option>

                                    <?php } ?>

                                    <script>  
                                        const selectPaciente = document.getElementById('selectpaciente');
                                        selectPaciente.addEventListener('change', function (e) {
                                            var option = document.getElementById('option-' + e.target.value)
                                            var data = JSON.parse(option.dataset.pacientes)
                                            Object.keys(data).forEach(function(key) {
                                                var elemento = document.getElementById(key);
                                                if (elemento) {
                                                elemento.value = data[key]
                                                }
                                            })
                                        })
                                    </script>
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

        <br><br>

        <div class="container">
            <div class="row">
                <div id="cobrar-citas">
                    <form action="php/guardar-cobros.php" method="POST" name="" id="form2"><br>

                    <div id="frente" align="center">
                            <img  style="width: 60px; height: 60px;" src="img/icono.png" alt="Icono Consult Help">
                            <a name="cobrar"></a>
                            <h1>Cobrar Consulta</h1><br><br>
                        </div>
                    <div align="center">
                    
                    <div id="nombr-pagar">
                        <label for="">Buscar Nombre:

                            <select id="selectname">                

                                <option value="--">Selecciona un paciente</option>

                                <?php

                                    include 'php/conexion.php';

                                    $execute1 = mysqli_query($conexion,"SELECT * FROM citas");
                                        
                                    while ($resultados1=mysqli_fetch_array($execute1)){
                                    
                                ?>
                                        
                                    <option id='options-<?php echo $resultados1["Id"]?>' value="<?php echo $resultados1['Id']?>" data-citas="<?php echo htmlspecialchars(json_encode($resultados1), ENT_QUOTES, 'UTF-8')?>"><?php echo $resultados1['Nombre del paciente']?></option>

                                <?php } ?>

                                <script>  
                                    const selectPacient = document.getElementById('selectname');
                                    selectPacient.addEventListener('change', function (s) {
                                        var options = document.getElementById('options-' + s.target.value)
                                        var datas = JSON.parse(options.dataset.citas)
                                        Object.keys(datas).forEach(function(key) {
                                            var elemento = document.getElementById(key);
                                            if (elemento) {
                                            elemento.value = datas[key]
                                            }
                                        })
                                    })
                                </script>
                                        
                            </select>   
                        </label>
                    </div><br>
                    <div id="nombre-pagar">
                        <label for="">Nombre:</label>
                        <input autocomplete="off" type="text" name="nombre_cita" id="Nombre del paciente">
                    </div><br>
                    <div id="telefono-pagar">
                        <label for="">Telefono:</label>
                        <input autocomplete="off" type="tel" name="tel1" id="Telefono del paciente">
                    </div><br>
                        
                    <div id="proxima-cita">
                        <label for="">Fecha de la cita:</label>
                        <input autocomplete="off" type="date" name="cita1" id="Fecha_citas">
                    </div><br>
                    </div>
                    <div id="fecha-cita" align="center">
                        <label for="">Hora de la cita:</label>
                        <input autocomplete="off" type="time" name="cita1" id="Hora_citas">
                    </div><br><br>
                    <div id="estudios" align="center">
                            <div style="font-size: 20px;"> 
                                <b>Estudios Realizados</b>
                                <br><br>
                            </div>

                            <label for="checkbox1"><input type="checkbox" name="checkbox1" id="checkbox1" value="">
                            Electrocardiograma</label>
                            <label for="checkbox2"><input type="checkbox" name="checkbox2" id="checkbox2" value="">
                            Endoscopia</label>
                            <label for="checkbox3"><input type="checkbox" name="checkbox3" id="checkbox3" value="">
                            Chequeo Extra</label>
                            <label for="checkbox4"><input type="checkbox" name="checkbox4" id="checkbox4" value="">
                            Terapia</label>

                        </div>
                        
                        <br><br><br>
                        
                            <div id="seguro" align=center>
                                <div style="font-size: 20px;">
                                    <b>Seguro Medico</b>
                                </div>
                        
                            <div id="rad" align="center">
                                <br>
                                <label><input type="radio" name="sm" value="si" id="si"/>Si</label>
                                <label><input type="radio" name="sm" value="no" id="no" checked/>No</label>
                            </div>
                        </div><br>
                        
                        <div id="lolo">
                            <label for="">Consulta:</label>
                            <input autocomplete="off" type="number" name="Consulta" value="3000" id="Consulta">
                        </div>
                
                        <div id="total">
                            <label for="">Total a pagar:</label>
                            <input type="number" name="Total" value="" id="Total"/>
                        </div><br>
                        <div id="botones" align="center">
                            <input type="reset" value="Borrar" style="width: 70px;">
                            <button type="button" onclick="calculo();" style="width: 70px;">Calcular</button>
                            <input type="submit" value="Guardar" style="width: 70px;">
                        </div>
                        <div id="pagado">
				            <input type="number" id="Pagado" placeholder="Pagado" name="Pagado"/><br><br>
                        </div>
                        <div id="devuelta">
                            <input type="number" name="Devuelta" value="" id="Devuelta" placeholder="Devuelta"/>
                        </div>
                        <div id="botones" align="center">
				            <button type="button" onclick="pagar();" style="width: 90px;">Devuelta</button>
                        </div>
                
                    </form>
                </div>
            </div>
        </div>

        <br>

        <a name="Agregar">

        <div class="container">
            <div class="row">
                <div id="añadir-paciente">
                    <form action="php/php-agregar-paciente.php" method="post"><br><br>
                        <div align="center">
                            <img  style="width: 60px; height: 60px;" src="img/icono.png" alt="Icono Consult Help">
                        </div>

                        <h1>Agregar Nuevo Paciente</h1>

                        <div id="div-nombre-paciente">
                            <label for="">Nombre del paciente:</label>
                            <input type="text" autocomplete="off" name="nombre-paciente" id="nombre-paciente"><br>
                        </div>

                        <div id="div-telefono-paciente">
                            <label for="">Telefono del paciente:</label>
                            <input type="tel" autocomplete="off" name="telefono-paciente" id="telefono-paciente"><br>
                        </div>

                        <div id="div-email-paciente">
                            <label for="">Email del paciente:</label>
                            <input type="email" autocomplete="off" name="email-paciente" id="email-paciente"><br>
                        </div>

                        <div id="div-padecimientos-paciente">
                            <label for="">Padecimientos:</label>
                            <input type="text" autocomplete="off" name="padecimientos-paciente" id="padecimiento-paciente">
                        </div>

                        <div id="div-detalles-paciente">
                            <label for="">Detalles:</label><br>
                            <textarea name="detalles-paciente" id="detalles-paciente" cols="25" rows="7"></textarea><br>
                        </div>

                        <div id="div-aseguradora-paciente">
                            <label for="">Aseguradora:</label>
                            <input type="text" autocomplete="off" name="aseguradora-paciente" id="aseguradora-paciente"><br>
                        </div>
                        
                        <div id="botones1" align="center">
                            <input type="reset" value="Borrar" style="width: 70px;">
                            <button type="submit" style="width: 70px;">Guardar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>

                <div id="mostrar-consultas" align="center">
                    <h1>Todos los pacientes:</h1>
                    <table id="tabla" name="tabla">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre del Paciente</th>
                                <th>Telefono</th>
                                <th>Email</th>
                                <th>Padecimientos</th>                                
                                <th>Detalles</th>
                                <th>Aseguradora</th>
                            </tr>
                        </thead>
                        
                        <?php

                            require 'php/conexion.php';

                            $sql = "SELECT * FROM pacientes";

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

                <br><br><br>

        <a name="tabla"></a>

                <div id="mostrar-consultas" align="center">
                    <h1>Tabla de citas:</h1>
                    <table id="tabla" name="tabla">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre del Paciente</th>
                                <th>Email</th>
                                <th>Telefono</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Aseguradora</th>
                                <th>Detalles</th>
                            </tr>
                        </thead>
                        
                        <?php

                        require 'php/conexion.php';

                        $sql = "SELECT * FROM citas";

                        $result = mysqli_query($conexion, $sql);

                        while($mostrar=mysqli_fetch_array($result)){

                        ?>
                        <tr>
                        
                            <td><?php echo $mostrar['Id'] ?></td>
                            <td><?php echo $mostrar['Nombre del paciente'] ?></td>
                            <td><?php echo $mostrar['Email del paciente'] ?></td>
                            <td><?php echo $mostrar['Telefono del paciente'] ?></td>
                            <td><?php echo $mostrar['Fecha_citas'] ?></td>
                            <td><?php echo $mostrar['Hora_citas'] ?></td>
                            <td><?php echo $mostrar['Aseguradora'] ?></td>
                            <td><?php echo $mostrar['Detalles'] ?></td>

                        </tr>

                        <?php } ?>
                        
                    </table>
                </div>
        
        <br> <br>

        <?php require 'footer.html' ?>
        
    </body>

</html>