<?php 
    include_once("../../control/Pelicula.php");
    include_once("../../util/funciones.php");

    $recibido = data_submitted();
    $objPelicula=new Pelicula(
        $recibido["titulo"],
        $recibido['actores'],
        $recibido["director"],
        $recibido["guion"],
        $recibido["produccion"],
        $recibido["anio"],
        $recibido["nacionalidad"],
        $recibido["genero"],
        $recibido["duracion"],
        $recibido["restriccion"],
        $recibido["sinopsis"]);
?>
<html>
    <head>
        <title>Grupo 5 TP2 Ejercicio 4</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>
    <body >
    <div class="alert alert-success" role="alert">
    <?php
        echo $objPelicula;
        ?>    
    </div>
        
    </body>
</html>