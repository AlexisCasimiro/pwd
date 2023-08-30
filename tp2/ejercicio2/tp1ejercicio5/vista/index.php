<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Grupo5 TP2 Ejercicio 2 TP1E5</title>
</head>
<body>
    <div class="form-tabla">
        <form action="accion/accion.php" method="get" name="formulario" id="formulario">
            <table>
                <tr>
                    <td class="form-tag">Nombre:</td>
                    <td><input class="form-input" name="nombre" id="nombre" type="text" required><div id="error-nombre"><br></td>
                </tr>
                <tr>
                    <td class="form-tag">Apellido:</td>
                    <td><input class="form-input" name="apellido" id="apellido" type="text" required><div id="error-apellido"><br></td>
                </tr>
                <tr>
                    <td class="form-tag">Edad:</td>
                    <td><input class="form-input" name="edad" id="edad" type="number"  required min="1"><div id="error-edad"><br></td>
                </tr>
                <tr>
                    <td class="form-tag">Dirección:</td>
                    <td><input class="form-input" name="direccion" id="direccion" type="text" required><div id="error-direccion"><br></td>
                </tr>
                <tr>
                    <td class="form-tag">Estudios:</td>
                    <td>
                        <input type="checkbox" name="estudios" id="sin-estudios" value="No tiene estudios">No tiene estudios <br>
                        <input type="checkbox" name="estudios" id="estudios-primarios" value="Estudios Primarios">Estudios Primarios <br>
                        <input type="checkbox" name="estudios" id="estudios-secundarios" value="Estudios Secundarios">Estudios Secundarios
                        <div id="error-estudios"></div>
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
                        <div id="error-sexo"></div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div id="aviso-sexo"></div>
                    </td>
                </tr>
                <tr>
                    <td><input class="submit" type="submit" value="Enviar"></td>
                </tr>
            </table>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="validacion.js"></script>
</body>
</html>