$(document).ready(()=>{
    $("#formNum").submit(function(evento){
        //declaracion de variables
        var resp=true;
        var numero=$("#numero");

        numero.css("border", "1px solid grey");

        if(numero.val()==""){
            numero.css("border", "2px solid red");
            resp=false;
        }

        //default
        return resp;
    })
});