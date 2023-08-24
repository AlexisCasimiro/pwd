<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
    </style>
    <form action="login.php" method="post" id="formLogin">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario">
        <div id="error-usuario" class="errores"></div>
        <label for="contraseña">Contraseña:</label>
        <input type="password" name="contrasenia" id="contrasenia">
        <div id="error-contraseña" class="errores"></div>
        <input type="submit" value="Login">
    </form>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="validacion.js"></script>
</body>
</html>