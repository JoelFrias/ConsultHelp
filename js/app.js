var boton = document.getElementById('boton');
var input = document.getElementById('password');

boton.addEventListener('click', mostrarContraseña);

function mostrarContraseña(){

    if(input.type == "password"){

        input.type = "text";
        boton.src = "img/ocultar.png";

        setTimeout("ocultar()", 5000);

    }else{

        input.type = "password";
        boton.src = "img/mostrar.png";

    }
    
}

function ocultar(){

    input.type = "password";
    boton.src = "img/mostrar.png";
    
}