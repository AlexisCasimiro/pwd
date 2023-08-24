<?php
    include_once("../control/Usuario.php");
    $usuarios=[
        'pepito'=>"1234pepito",
        'pablito'=>"1234pablito",
        'carlitos'=>"1234carlitos",
        'lolito'=>"1234lolito"
    ];
    $obj=new Usuario;
    $existe=$obj->verificarUsuario($usuarios);
?>
<html>
    <head>
        <title>login</title>
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