<?php
    include_once("../control/Entrada.php");
    
    $obj= new Entrada($_GET["edad"] ,$_GET["estudia"]);
    $precioEntrada=$obj->calcularPrecio();
?>
<html>
    <head>
        <title>Cine cinem@s</title>
    </head>
    <body>
        <div class="container">
            <h3 class="titulo">Precio de la Entrada</h3>
            <?php
                echo "$".$precioEntrada;
            ?>
        </div>
        
    </body>
</html>