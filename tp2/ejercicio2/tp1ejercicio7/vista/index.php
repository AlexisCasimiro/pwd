<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="formAccion.php" method="get" name="formulario" id="formulario"> <!--onsubmit="return validar();"-->
        <input type="number" name="operando1" id="operando1">
        <div id="error-operando1"></div>
        <input type="number" name="operando2" id="operando2">
        <div id="error-operando2"></div>
        <select name="operacion" id="operacion">
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicacion</option>
        </select>
        <div id="error-operacion"></div>
        <input type="submit" value="Resolver">
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="validacion.js"></script>
</body>
</html>