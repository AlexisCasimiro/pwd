<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script type="text/javascript">
        function validarForm(){
            //declaracion de variables
            var edad=document.getElementById("edad");
            var estudia=document.getElementById("estudia");
            var resp=true;
            //default
            edad.style.border="1px grey solid";
            estudia.style.border="1px grey solid";
            if(edad.value==""){
                edad.style.border="1px red solid";
                resp=false;
            }
            if(estudia.value==""){
                estudia.style.border="1px red solid";
                resp=false;
            }
            return resp;
        }
    </script>
    <form action="formAccion.php" method="get" name="formulario" id="formulario" onsubmit="return validarForm()">
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" >
        <label for="estudiante">Sos estudiante?:</label>
        <select name="estudia" id="estudia">
            <option value=""></option>
            <option value="si">SI</option>
            <option value="no">NO</option>
        </select>
        <input type="submit" value="calcular precio">
        <button type="reset" id="limpiarFormulario">Limpiar</button>
    </form>
</body>
</html>