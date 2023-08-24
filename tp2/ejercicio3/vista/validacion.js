$(document).ready(()=>{
    $("#formLogin").submit(()=>{
        //expresiones regulares
        var caracter = /[a-zA-Z]/;
        var number = /[0-9]/;
        
        var resp=true;
        var usuario=$("#usuario");
        var errorUsuario=$("#error-usuario");
        var errorContra=$("#error-contraseña");
        var password=$("#contrasenia").val();

        $(".errores").text("");//resetear los div en caso de que no haya errores
        if(usuario.val()==""){
            errorUsuario.text("Debe ingresar un usuario valido")
            resp=false;
        }
        if(password=="" || password.length<8 || !caracter.test(password) || !number.test(password)){
            errorContra.text("Ingrese una contraseña valida minimo 8 caracteres, letras y numeros");
            resp=false;
        }
        return resp;
    })
});