<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo5 TP2 Ejercicio2 TP1E2</title>
</head>
<body>
    <form action="accion/accion.php" method="get" name="formulario" id="formulario">
        <h1> Ingrese las horas cursadas </h1>
        <label for="lunes">Lunes</label>
        <input name="lunes" id="lunes" type="number" value="0" min="0"> <br>
        <label for="martes">Martes</label>
        <input name="martes" id="martes" type="number" value="0" min="0"><br>
        <label for="miercoles">Miercoles</label>
        <input name="miercoles" id="miercoles" type="number" value="0" min="0"><br>
        <label for="jueves">Jueves</label>
        <input name="jueves" id="jueves" type="number" value="0" min="0"><br>
        <label for="viernes">Viernes</label>
        <input name="viernes" id="viernes" type="number" value="0" min="0"><br>
        
        <input type="submit" value="Enviar" > 
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="validacion.js"></script>
</body>
</html>