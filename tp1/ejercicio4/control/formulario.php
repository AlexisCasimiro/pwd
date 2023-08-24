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

        if($edad>=18){
            echo "<h1 style='color:green;'>Hola soy MAYOR DE EDAD, me llamo $nombre , $apellido tengo $edad años y vivo en $direccion.</h1>";
        }else{
            echo "<h1 style='color:red;'>'Hola soy MENOR DE EDAD, me llamo $nombre , $apellido tengo $edad años y vivo en $direccion'</h1>";
        }

        
    ?>
</body>
</html>