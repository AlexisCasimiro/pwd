<?php
    include_once("../../control/Usuario.php");
    include_once("../../datos/usuariosreg.php");
    include_once("../../util/funciones.php");

    $recibido = data_submitted();
    $user = $recibido["usuario"];
    $contrasenia = $recibido["contrasenia"];
    $objUsuario = new Usuario($user, $contrasenia);
    $existe=$objUsuario->verificarUsuario($usuarios, $objUsuario);
?>
<html>
    <head>
        <title>Login  Grupo 5 TP2 Ejercicio 3</title>
    </head>
    <body>
        <?php
            if($existe){
                echo "Bienvenido pudiste logear.";
            }else{
                echo "Error, usuario no encontrado.";
            }
        ?>
    </body>
</html>