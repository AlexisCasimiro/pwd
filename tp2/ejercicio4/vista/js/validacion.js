// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
    'use strict'
  
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    const forms = document.querySelectorAll('.needs-validation')
    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }
  
        form.classList.add('was-validated')
      }, false)
    })
})()


/*$(document).ready(()=>{
    $("#form-cinemas").submit(()=>{
        var resp=false
        return resp;
        //expresiones regulares
        /*var caracter = /[a-zA-Z]/;
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
})*/