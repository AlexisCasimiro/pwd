<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <!--Link bootstrap-->
    <link rel="stylesheet" href="../../bootstrap5/css/bootstrap.min.css">
        <!--Link Icono de bootstrap  con CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
<body>
    <div class="p-3 bg-info text-dark">
        <?php
        // Uso el archivo control.php
        include_once dirname(__DIR__).'/control/Control.php';

        // CREACION DEL OBJ DE LA CLASE CONTROL 
         // creo un obj de la clase control
         $objControl=new Control($_FILES["archivo"]);

         // llamo al metodo  cargar Archivo
         $salida=$objControl->cargarArchivo();
         $link=$salida["path"]; // ruta donde se almacena el archivo 
         $tamanio=intval($salida["size"])/(1024*1024);
        
         if($salida["exito"]){
            echo("<p style='color:green';>".$salida["mensaje"]."</p>");
            echo("<p>"."El nombre del archivo es: ".$salida["name"]."<br> y pesa ".$tamanio." MB"."</p>");
        ?>    
            <a class="text-dark link-underline-info" href="<?php echo($link)?>" target="_blank"> Mostar Archivo</a>
        <?php }// fin if 
        else{
            echo("<p style='color:red';>".$salida["mensaje"]."</p>"); 
        }// fin else   
        ?>
        <p><a class="text-dark link-underline-info" href="./index.php">Volver</a></p>
           

    </div>
</body>
</html>