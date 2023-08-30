<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre=$_GET["nombre"] ;
        $apellido=$_GET["apellido"] ;
        $edad=$_GET["edad"] ;
        $direccion=$_GET["direccion"] ;
        $estudios="";
        $deportes="";
        $cantDeportes=0;

        //checkboc de estudios
        if(!empty($_GET["sin-estudios"])){
            $estudios=$estudios . $_GET["sin-estudios"];
        }
        if(!empty($_GET["estudios-primarios"])){
            $estudios=$estudios . $_GET["estudios-primarios"];
        }
        if(!empty($_GET["estudios-secundarios"])){
            $estudios=$estudios . "-" . $_GET["estudios-secundarios"];
        }
        //checkbox de deportes
        if(!empty($_GET["futbol"])){
            $cantDeportes=$cantDeportes+1;
            $deportes=$deportes . $_GET["futbol"];
        }
        if(!empty($_GET["basket"])){
            $cantDeportes=$cantDeportes+1;
            $deportes=$deportes . "-" . $_GET["basket"];
        }
        if(!empty($_GET["tennis"])){
            $cantDeportes=$cantDeportes+1;
            $deportes=$deportes . "-" . $_GET["tennis"];
        }
        if(!empty($_GET["voley"])){
            $cantDeportes=$cantDeportes+1;
            $deportes=$deportes . "-" . $_GET["voley"];
        }

        $sexo=$_GET["sexo"];
        echo "<h1>Hola me llamo $nombre, $apellido tengo $edad años, vivo en $direccion, soy del sexo $sexo </h1><br>
        <h3>Estudios: $estudios</h3> <br>
        <h3>Cantidad de deportes:$cantDeportes<h3> <br>
        <h3>Nombre de los deportes:$deportes</h3>";
    ?>
</body>
</html>