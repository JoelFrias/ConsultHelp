function calculo(){

    var nul;

    if(document.getElementById('checkbox1').checked==true){ 
        var Electro=" Electrocardiograma -";
        var llave=parseInt(900);
        document.getElementById('checkbox1').value=Electro;
    } else{ 
        var llave=0;
        document.getElementById('checkbox1').value=nul;
    }

    if(document.getElementById('checkbox2').checked==true){ 
        var Endos=" Endoscopia -";
        var puerta=parseInt(45000);
        document.getElementById('checkbox2').value=Endos;
    } else{ 
        var puerta=0;
        document.getElementById('checkbox2').value=nul;
    }

    if(document.getElementById('checkbox3').checked==true){ 
        var chequeo=" Chequeo Extra -";
        var ventana=parseInt(4500);
        document.getElementById('checkbox3').value=chequeo;
    } else{ 
        var ventana=0;
        document.getElementById('checkbox3').value=nul;
    }

    if(document.getElementById('checkbox4').checked==true){ 
        var terapia=" Terapia";
        var hierro = parseInt(1500);
        document.getElementById('checkbox4').value=terapia;
    } else{ 
        var hierro=0;
        document.getElementById('checkbox4').value=nul;
    }

    var consulta = parseInt(document.getElementById('Consulta').value);

    var kk = (llave + puerta) + (ventana + hierro);
    
    var subtotal = kk + consulta;

    var total;

    if (document.getElementById('si').checked){
        total = subtotal * 0.4;
    }else{
        total = subtotal;
    }

    document.getElementById('Total').value=+total;

}

function pagar() {
    var total=document.getElementById('Total').value;

    var pagado=document.getElementById('Pagado').value;

    if (pagado>0){

        var devuelta=pagado-total;
        document.getElementById('Devuelta').value=devuelta.toFixed();

    } 
    else {
        devuelta=0;
    }

    var J=document.getElementById('Devuelta').value;
    
    if (J<0) {
        alert ('Falta dinero');
    }
    else{
        alert ('Pago realizado');
    }
}