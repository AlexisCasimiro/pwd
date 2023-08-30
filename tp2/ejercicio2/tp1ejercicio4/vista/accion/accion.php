<?php
include_once("../control/control.php");
$obj=new control($_GET["edad"]);

$esMayor=$obj->esMayor();

?>

<div class="container">
    <h1 class="titutlo">

    </h1>

    <?php
    if($esMayor){
        echo("<p>Usted es mayor de edad</p>");
    }// fin if 
    else{
        echo("<p>Usted es menor de edad</p>");

    }// fin else
     
    ?>
    <a class="link" href="index.php">Volver</a>   

</div>