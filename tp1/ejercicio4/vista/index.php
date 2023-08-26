<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        function validar(){
            //declaracion de variables
            var resp=true;
            var nombre=document.getElementById("nombre");
            var apellido=document.getElementById("apellido");
            var edad=document.getElementById("edad");
            var direccion=document.getElementById("direccion");

            //default
            nombre.style.border="grey";
            apellido.style.border="grey";
            edad.style.border="grey";
            direccion.style.border="grey";
            
            //comprobando si todos los campos estan completados
            if(nombre.value == ""){
                nombre.style.border="3px red solid";
                resp=false;
            }
            if(apellido.value == ""){
                apellido.style.border="3px red solid";
                resp=false;
            }
            if(edad.value == ""){
                edad.style.border="3px red solid";
                resp=false;
            }
            if(direccion.value == ""){
                direccion.style.border="3px red solid";
                resp=false;
            }

            return resp;
        }
    </script>
    <div class="form-tabla">
        <form action="accion.php" method="get" name="formulario" id="formulario" onsubmit="return validar();" >
            <table>
                <tr>
                    <td class="form-tag">Nombre:</td>
                    <td><input class="form-input" name="nombre" id="nombre" type="text"><br></td>
                </tr>
                <tr>
                    <td class="form-tag">Apellido:</td>
                    <td><input class="form-input" name="apellido" id="apellido" type="text"><br></td>
                </tr>
                <tr>
                    <td class="form-tag">Edad:</td>
                    <td><input class="form-input" name="edad" id="edad" type="number" value="0"><br></td>
                </tr>
                <tr>
                    <td class="form-tag">Dirección:</td>
                    <td><input class="form-input" name="direccion" id="direccion" type="text"> <br></td>
                </tr>
                <tr>
                    <td><input class="submit" type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>