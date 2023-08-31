$(document).ready(()=>{
    $("#formulario").submit(function(evento){
        //declaracion de variables
        var resp=true;
        var nombre=$("#nombre");
        var apellido=$("#apellido");
        var direccion=$("#direccion");
        var edad=$("#edad");
        var errorNombre=$("#error-nombre");
        var errorEdad=$("#error-edad");
        var errorDireccion=$("#error-direccion");
        var errorApellido=$("#error-apellido");

        //default
        errorNombre.text("");
        errorDireccion.text("");
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

        return resp;
    })
});