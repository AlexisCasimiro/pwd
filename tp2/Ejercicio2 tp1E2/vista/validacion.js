$(document).ready(()=>{
    $("#formulario").submit(function(evento){
        //declaracion de variables
        var resp=true;
        var lunes=$("#lunes");
        var martes=$("#martes");
        var miercoles=$("#miercoles");
        var jueves=$("#jueves");
        var viernes=$("#viernes");

        //default
        lunes.css("border","1px solid grey");
        martes.css("border","1px solid grey");
        miercoles.css("border","1px solid grey");
        jueves.css("border","1px solid grey");
        viernes.css("border","1px solid grey");
        if(lunes.val()==""){
            lunes.css("border", "2px solid red");
            resp=false
        }
        if(martes.val()==""){
            martes.css("border", "2px solid red");
            resp=false
        }
        if(miercoles.val()==""){
            miercoles.css("border", "2px solid red");
            resp=false
        }
        if(jueves.val()==""){
            jueves.css("border", "2px solid red");
            resp=false
        }
        if(viernes.val()==""){
            viernes.css("border", "2px solid red");
            resp=false
        }

        return resp;
    })
});