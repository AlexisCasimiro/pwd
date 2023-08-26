
<?php
    include_once("../control/control.php");
    
    $obj=new control($_GET["nombre"],$_GET["apellido"],$_GET["direccion"],$_GET["edad"]);
    

?>

<div class="container">
    <?php echo($obj); ?>

</div>
