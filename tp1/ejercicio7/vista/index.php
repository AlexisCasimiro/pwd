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
            //variables
            var resp=true;
            var operando1=document.getElementById("operando1");
            var operando2=document.getElementById("operando2");
            var operacion=document.getElementById("operacion");
            var aviso=document.getElementById("aviso");
            var resultado;
            //default
            aviso.innerHTML="";
            operando1.style.border="1px grey solid";
            operando2.style.border="1px grey solid";

            if(operando1.value==""){
                operando1.style.border="1px red solid";
                aviso.innerHTML="<p style='color:red'>Debe completar todos los campos</p>";
                resp=false;
            }
            if(operando2.value==""){
                operando2.style.border="1px red solid";
                aviso.innerHTML="<p style='color:red'>Debe completar todos los campos</p>";
                resp=false;
            }
            if(isNaN(operando1.value) ){
                aviso.innerHTML="<p style='color:red'>Debe ingresar dos numeros</p>";
                operando1.style.border="1px red solid";
                resp=false;
            }
            if(isNaN(operando2.value)){
                aviso.innerHTML="<p style='color:red'>Debe ingresar dos numeros</p>";
                operando2.style.border="1px red solid";
                resp=false;
            }

            return resp;
        }
    </script>
    <form action="accion/formAccion.php" method="get" name="formulario" id="formulario" onsubmit="return validar();">
        <h1 class="titulo">Operaciones con 2 numeros</h1>
        <input type="number" name="nro1" id="nro1" placeholder="2">
        <input type="number" name="nro2" id="nro2" placeholder="5">
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
        </select>
        <div id="aviso"></div>
        <input type="submit" value="Resolver">
    </form>
</body>
</html>