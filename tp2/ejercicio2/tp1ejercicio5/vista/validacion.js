$(document).ready(()=>{
    $("#formulario").submit(function(evento){
        //declaracion de variables
        var resp=true;
        var nombre=$("#nombre");
        var apellido=$("#apellido");
        var direccion=$("#direccion");
        var edad=$("#edad");
        var sexo=$("input[type='radio']:checked");
        var errorNombre=$("#error-nombre");
        var errorEdad=$("#error-edad");
        var errorSexo=$("#error-sexo");
        var errorEstudios=$("#error-estudios");
        var errorDireccion=$("#error-direccion");
        var errorApellido=$("#error-apellido");

        //default
        errorNombre.text("");
        errorDireccion.text("");
        errorEstudios.text("");
        errorSexo.text("");
        errorEdad.text("");
        errorApellido.text("");

        if(nombre.val()==""){
            errorNombre.text("Debe ingresar un nombre");
            resp=false;
        }
        if(direccion.val()==""){
            errorDireccion.text("Debe ingresar una direccion");
            resp=false;
        }
        if(apellido.val()==""){
            errorApellido.text("Debe ingresar un apellido");
            resp=false;
        }
        if(edad.val()==0 || edad.val()==""){
            errorEdad.text("Debe ingresar una edad");
            resp=false;
        }
        if(sexo.length==0){
            errorSexo.text("Debe elegir su sexo");
            resp=false;
        }
        if(!$('#sin-estudios').is(':checked') && !$('#estudios-primarios').is(':checked') && !$('#estudios-secundarios').is(':checked')){
            errorEstudios.text("Debe ingresar estudios");
            resp=false;
        }


        return resp;
    })
});