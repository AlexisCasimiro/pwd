<?php
    include_once("../control/Entrada.php");
    $obj= new Entrada;
    $precioEntrada=$obj->darPrecio();
?>
<html>
    <head>
        <title>Cine cinem@s</title>
    </head>
    <body>
        <?php
            echo $precioEntrada;
        ?>
    </body>
</html>