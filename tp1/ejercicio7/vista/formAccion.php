<?php
include_once("../control/Operacion.php");
$obj=new Operacion;
$resultado=$obj->resolucion();
?>
<html>
    <head>
        <title>ejercicio 7</title>
    </head>
    <body>
        <?php
        echo $resultado;
        ?>
    </body>
</html>