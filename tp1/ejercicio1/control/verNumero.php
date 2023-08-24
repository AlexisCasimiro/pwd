<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nro=$_GET['numero'];
    $mensaje="";
    if($nro>0){
        $mensaje="Es Positivo";
    }elseif($nro<0){
        $mensaje="es negativo";
    }else{
        $mensaje="Es un numero Cero";
    }
    echo"$mensaje";
    ?>
    <a href="../vistas/index.php">Volver a la pagina anterior</a>
</body>
</html>