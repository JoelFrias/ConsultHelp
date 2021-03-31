<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo/icono.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/citas.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <title>Invitado - Consult Help</title>
</head>
<body>
    <section id="header">
        <div class="header container">
            <div class="nav-bar">
                <div class="brand">
                    <a href="invitado.php"><h1><span>C</span>onsult <span>H</span>elp</h1></a>
                </div>
                <div class="brand" style="color:white;font-size:17px;position:relative;left:200px;">
                    Sesión iniciada como paciente.
                </div>
                <div class="brand">
                    <a href="php/salir.php"><button style="width:110px;">Cerrar Sesion</button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="hero">
        <div class="hero container">
            <div>
                <h1>La mejor<span></span></h1>
                <h1>Plataforma de <span></span></h1>
                <h1>Consultas Online<span></span></h1>
                <a href="#citas" type="button" class="cta">Agendar Cita</a>
                <a href="credit.html" type="button" class="cta">Doctores en servicio</a>
                <div id="p">
                    <p><h2 id="p" >"Tu necesidad es nuestra prioridad"</h2></p>
                </div>
            </div>
            <img id="asd" name="asd"src="img/register.svg" alt="Imagen de doctor">
        </div>
    </section>
    <!-- dasdasd -->
    <a name="citas"></a>

    <br><br><br><br>

    <div class="container">
            <div class="row">
                <div id="crea-cita">
                    <form action="php/recaptcha.php" method="POST" name="" id="form11"><br>

                        <div id="frente" align="center">
                            <img  style="width: 60px; height: 60px;" src="img/icono.png" alt="Icono Consult Help">
                            <h1>Agendar Cita</h1><br><br>
                        </div>

                        <div id="nom">

                            <label for="selectpaciente">Buscar paciente:<br>

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
                        <div id="botones11" align="center">
                            <div class="g-recaptcha" data-sitekey="6LdZ4owaAAAAALH5lTfyJVlleeLLSTA9k7wAtHQd"></div><br>
                            <input type="reset" value="Borrar" style="width: 70px;">
                            <button type="submit" onclick="" style="width: 70px;">Guardar</button>
                        </div>
                        <div id="huraa">
                            <label>Hora:</label><br>
                            <input autocomplete="off" type="time" name="Hora" value="" id="Hora"/><br><br>
                        </div>

                        <div id="dotee">
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
</html>