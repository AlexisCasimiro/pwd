<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lectura de archivo</title>
        <!--Link bootstrap-->
            <link rel="stylesheet" href="../../bootstrap5/css/bootstrap.min.css">
        <!--Link Icono de bootstrap  con CDN-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<?php 
        include_once ("../control/Control.php");
        
        // llamado a un obj de la clase control
        $objControl=new Control($_FILES["archivo"]);
        

        // llamado a los metodos de la clase control
        $archivo=$objControl->subeTxt();
        
    ?>
    <div class="container w-50 bg-light">
        <h1 class="text-dark text-center bg-info p-3">Lectura del archivo Txt</h1>
        <p class="text-center fs-3 fw-bold p-5">
        <?php 
            if($archivo["exito"]){
                $myFile=fopen($archivo["path"],"r");
                echo(fread($myFile,filesize($archivo["path"]))); 
                fclose($myFile);

            }// fin if 
            else{
                echo($archivo["mensaje"]);
            }// fin else 
        ?>
        </p>
        <a class="link-underline-primary fs-3" href="./index.php">Volver</a>
    
    </div>
    
</body>
</html>