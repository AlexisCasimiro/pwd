<?php 
    include_once("../control/Pelicula.php");
    $obj=new Pelicula($_GET["titulo"],$_GET['actores'],$_GET["director"],$_GET["guion"],$_GET["produccion"],$_GET["anio"],$_GET["nacionalidad"],$_GET["genero"],$_GET["duracion"],$_GET["restriccion"],$_GET["sinopsis"]);
?>
<html>
    <head>
        <title>punto 4 Tp2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>
    <body >
    <div class="alert alert-success" role="alert">
    <?php
        echo $obj;
        ?>    
    </div>
        
    </body>
</html>