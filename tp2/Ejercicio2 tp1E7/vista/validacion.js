$(document).ready(()=>{
    $("#formulario").submit(function(evento){
        //declaracion de variables
        var resp=true;
        var operando1=$("#operando1");
        var operando2=$("#operando2");
        //default
        $("#error-operando1").text("");
        $("#error-operando2").text("");
        if(operando1.val()==""){
            $("#error-operando1").text("ingrese un valor");
            resp=false;
        }
        if(operando2.val()==""){
            $("#error-operando2").text("ingrese un valor");
            resp=false;
        }

        return resp;
    })
});