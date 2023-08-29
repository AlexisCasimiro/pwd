<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grupo 5 TP2 Ejercicio 3</title>
    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <!-- Enlaza FontAwesome CSS (Asegúrate de usar la URL correcta) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>
    <style>
    </style>
    <div class="container ">
        <div class="row">
            <div class="col-md-4"></div>
                <div class="col-md-4 my-5">
                    <h1  style="text-align:center; vertical-align: middle;">Merber Login</h1>
                    <form action="./accion/login.php" id="formLogin" method="post">
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" name="usuario" id="usuario" placeholder="👤Username">
                            <div id="error-usuario" class="errores"></div>
                        </div>
                        <div class="mb-3">
                            <label for="contraseña" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" name="contrasenia" id="contrasenia" placeholder="🔒Password" >
                            <div id="error-contraseña" class="errores"></div>
                        </div>
                        <div class="d-grid gap-2">
                            <input class="btn btn-success" type="submit" value="Login">
                        </div>
                    </form>
                </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="./js/jquery-3.7.0.min.js"></script>
    <script src="./js/validacion.js"></script>
</body>
</html>