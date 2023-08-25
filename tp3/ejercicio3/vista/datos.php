
<html>
    <head>
        <title>punto 4 Tp2</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </head>
    <body >
    <div class="alert alert-success" role="alert">
        <?php
        include_once("../control/Pelicula.php");
        $obj=new Pelicula($_POST["titulo"],$_POST['actores'],$_POST["director"],$_POST["guion"],$_POST["produccion"],$_POST["anio"],$_POST["nacionalidad"],$_POST["genero"],$_POST["duracion"],$_POST["restriccion"],$_POST["sinopsis"],$_FILES["imagen"]);
            
        $cargarImagen=$obj->cargarImagen(); 
        $link=$cargarImagen["path"]; 
        if($cargarImagen["exito"]){
            ?>
            <div class="d-flex flex-row mb-3">
                <div class="p-2"><?php echo($obj); ?></div>
                <div class="p-2"><img src="<?php echo($link)?>" class="img-fluid" width="600px" height="800px"></div>
            </div>
            
            <?php

        }// fin if 
        else{
            echo("<p style='color:red'>".$cargarImagen["mensaje"]."</p>"); 
        }// fin else
        

        ?>    
        <a class="fs-3" href="./index.php">Volver</a>
    </div>
        
    </body>
</html>