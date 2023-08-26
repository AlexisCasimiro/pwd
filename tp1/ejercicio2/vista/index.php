<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        function validar(){
            var resp=true;
            var lunes=document.getElementById("lunes");
            var martes=document.getElementById("martes");
            var miercoles=document.getElementById("miercoles");
            var jueves=document.getElementById("jueves");
            var viernes=document.getElementById("viernes");

            if(lunes.value == ""){
                lunes.style.borderColor="#ff0000";
                resp=false;
            }
            if(martes.value == ""){
                martes.style.borderColor="#ff0000";
                resp=false;
            }
            if(miercoles.value == ""){
                miercoles.style.borderColor="#ff0000";
                resp=false;
            }
            if(jueves.value == ""){
                jueves.style.borderColor="#ff0000";
                resp=false;
            }
            if(viernes.value == ""){
                viernes.style.borderColor="#ff0000";
                resp=false;
            }
            return resp;
        }
    </script>
    <form action="accion.php" method="get" name="formulario" id="formulario" onsubmit="return validar();">
        <h1> Ingrese las horas cursadas </h1>
        <label for="lunes">Lunes</label>
        <input name="lunes" id="lunes" type="number" value="0"> <br>
        <label for="martes">Martes</label>
        <input name="martes" id="martes" type="number" value="0"><br>
        <label for="miercoles">Miercoles</label>
        <input name="miercoles" id="miercoles" type="number" value="0"><br>
        <label for="jueves">Jueves</label>
        <input name="jueves" id="jueves" type="number" value="0"><br>
        <label for="viernes">Viernes</label>
        <input name="viernes" id="viernes" type="number" value="0"><br>
        
        <input type="submit" value="Enviar" > 
    </form>
</body>
</html>