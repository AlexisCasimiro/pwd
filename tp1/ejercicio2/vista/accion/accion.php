<!DOCTYPE html>
<html lang="en">

<body>
    <?php
        include_once("../control/horas.php");
        $horasSemana=$_GET;
        $obj=new horas($horasSemana);
        $cantHoras=$obj->horasTotales();

    ?>
    <h1 class="titulo">Horas semanales de PWD</h1>
    <p> <?php  echo($cantHoras);  ?> </p>
    <a  class="link" href="index.php">Volver</a>

    
</body>
</html>