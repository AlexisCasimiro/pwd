<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        function validar(){
            var resp=true;
            //declaracion de variables
            var nombre=document.getElementById("nombre");
            var apellido=document.getElementById("apellido");
            var edad=document.getElementById("edad");
            var direccion=document.getElementById("direccion");
            var sinEst=document.getElementById("sin-estudios");
            var conEst=document.getElementById("estudios-primarios");
            var conSec=document.getElementById("estudios-secundarios");
            var aviso=document.getElementById("aviso-estudios");
            var sexo=document.getElementById("aviso-sexo");
            var masculino=document.getElementById("masculino");
            var femenino=document.getElementById("femenino");

            //default
            aviso.innerHTML="";
            sexo.innerHTML="";
            nombre.style.border="grey";
            apellido.style.border="grey";
            edad.style.border="grey";
            direccion.style.border="grey";


            //comprobando que todos los campos esten completos
            if(!masculino.checked && !femenino.checked){
                sexo.innerHTML="<p style='color:red'>Debe elegir tu sexo</p>"
                resp=false;
            }
            if(!sinEst.checked && !conEst.checked && !conSec.checked){
                aviso.innerHTML="<p style='color:red'>Debe agregar sus estudios</p>";
                resp=false;
            }

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
        <form action="accion.php" method="get" name="formulario" id="formulario" onsubmit="return validar();">
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
                    <td class="form-tag">Estudios:</td>
                    <td>
                        <input type="radio" name="estudios" id="sin-estudios" value="No tiene estudios">No tiene estudios <br>
                        <input type="radio" name="estudios" id="estudios-primarios" value="Estudios Primarios">Estudios Primarios <br>
                        <input type="radio" name="estudios" id="estudios-secundarios" value="Estudios Secundarios">Estudios Secundarios
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="aviso-estudios"></div>
                    </td>
                </tr>
                <tr>
                    <td class="form-tag">Sexo:</td>
                    <td>
                        <input type="radio" id="masculino" name="sexo" value="Masculino"> <label>Masculino</label> <br>
                        <input type="radio" id="femenino" name="sexo" value="Femenino"> <label>Femenino</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="aviso-sexo"></div>
                    </td>
                </tr>
                <tr>
                    <td class="form-tag">Deportes:</td>
                    <td>
                        <input type="checkbox" name="deporte[]" id="futbol" value="futbol">Futbol <br>
                        <input type="checkbox" name="deporte[]" id="basquet" value="basquet">Basquet <br>
                        <input type="checkbox" name="deporte[]" id="tennis" value="tennis">Tennis <br>
                        <input type="checkbox" name="deporte[]" id="voley" value="voley">Voley
                    </td>
                </tr>
                <tr>
                    <td><input class="submit" type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>