$(document).ready(()=>{
    $("#formulario").submit(()=>{
        var edad=$("#edad").val();
        var errorEdad=$("#error-edad");
        var errorEstudia=$("#error-estudia");
        var estudia=$("#estudia option:selected");
        var resp=true;
        $(".errores").text("");
        if(edad.length==0){
            errorEdad.text("Este campo es obligatorio");
            resp=false;
        }
        if(estudia.val()==""){
            errorEstudia.text("Este campo es obligatorio");
            resp=false;
        }
        return resp
    })
});