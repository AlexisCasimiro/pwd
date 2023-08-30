<title>Grupo5 TP2 Ejercicio 2 TP1E5</title>
<div class="container">
    <?php
    include_once("../control/formulario.php");
   
    $obj=new formulario($_GET["nombre"],$_GET["apellido"],$_GET["direccion"],$_GET["edad"],$_GET["sexo"],$_GET["estudios"]);

    ?>

    <div class="container">
        <h1> Informacion </h1>
        <?php echo($obj) ?>

    </div>


</div>