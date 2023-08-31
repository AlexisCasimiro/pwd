<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .errores{
            color:red;
        }
    </style>
    <form action="accion/formAccion.php" method="get" name="formulario" id="formulario" >
        <label for="edad">Edad:</label>
        <input type="number" name="edad" id="edad" >
        <div id="error-edad" class="errores"></div>
        <label for="estudiante">Sos estudiante?:</label>
        <select name="estudia" id="estudia">
            <option value=""></option>
            <option value="si">SI</option>
            <option value="no">NO</option>
        </select>
        <div id="error-estudia" class="errores"></div>
        <input type="submit" value="calcular precio">
        <button type="reset" id="limpiarFormulario">Limpiar</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="validacion.js"></script>
</body>
</html>