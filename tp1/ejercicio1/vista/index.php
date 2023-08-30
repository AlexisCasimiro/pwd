<!DOCTYPE html>
<html lang="en">
<?php
    $Titulo = "GRUPO 5 TP1 Ej1";
    include_once("../../../Estructuras/header.php");
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
<script type="text/javascript">
    function validar(){
        var resp=true;
        var numero=document.getElementById("numero");
        if(numero.value == ""){
            numero.style.borderColor="#FF0000";
            resp=false;
        }
        return resp;
    }
</script>
    <h1>Ejercicio N°1</h1>
    <form action="accion/accionNumero.php" method="get" name="formNum" id="formNum" onsubmit="return validar();">
        Ingrese un numero: <input type="number" name="numero" id="numero">
        <input type="submit" value="enviar">
    </form>
</body>
</html>