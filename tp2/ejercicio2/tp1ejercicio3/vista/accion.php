
<?php
    include_once("../control/control.php");
    
    $obj=new control($_POST["nombre"],$_POST["apellido"],$_POST["direccion"],$_POST["edad"]);
    

?>

<div class="container">
    <?php echo($obj); ?>

</div>
