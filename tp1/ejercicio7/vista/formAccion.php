<?php
include_once("../control/Operacion.php");

$obj=new Operacion($_GET["nro1"],$_GET["nro2"],$_GET["operacion"]);

?>

<div class="container">
    <h2> El resultado de la <?php echo($obj->getOperacion()); ?> entre 
        <?php echo($obj->getNro1()); ?> y <?php echo($obj->getNro2()); ?> es:
    </h2>
    
    <div> <?php echo($obj->resolucion()) ?> </div>
    
</div>