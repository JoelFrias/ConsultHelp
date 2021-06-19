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
                <title>Consult Help</title>
                <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
            </head>
            <body>
                <?php require 'header.php' ?>
            <br><br><br><br><br><br><br>
            <a name="cobrar">
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
                                        
                                        <option value="--">Seleccionar</option>

                                        <?php

                                            $execute1 = mysqli_query($conexion,"SELECT * FROM citas");
                                            
                                            while ($resultados1=mysqli_fetch_array($execute1)){
                                                
                                        ?>
                                                
                                                <option id='options-<?php echo $resultados1["Id"]?>' value="<?php echo htmlspecialchars(json_encode($resultados1), ENT_QUOTES, 'UTF-8')?>"><?php echo $resultados1['Nombre del paciente']?></option>

                                        <?php } ?>

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
                </div> <br><br><br><br><br>
                
            <?php require 'footer.html' ?>

            <script>
        
                $(document).ready(function(){
            
                    $('#selectname').select2();
                    $('#selectname').on('select2:select',function(e){
            
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

        <script src="js/jquery-3.1.1.min.js"></script>
        <script src="js/select2.js"></script>
        <script src="js/java.js"></script>

    </body>
</html>