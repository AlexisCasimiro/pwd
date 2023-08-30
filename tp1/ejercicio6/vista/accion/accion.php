<?php
    include_once("../control/formulario.php");
    var_dump($_GET["deporte"][1]);

    $obj=new formulario($_GET["nombre"],$_GET["apellido"],$_GET["direccion"],$_GET["edad"],$_GET["sexo"],$_GET["estudios"],$_GET["deporte"]);
    $deportes=$obj->mostrarDeportes();

?>

<div class="container">
    <h1 class="titulo">Informacion</h1>
    <?php echo($obj);?>
    <p>Los deporte que practica son:</p>
    <?php for($k=0;$k<count($obj->getDeportes()); $k++){
        echo($deportes[$k]."<br>");
    } ?>
</div>