<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include "../control/verNumero.php"; 
        $nro=floatval($_GET["numero"]);
        $obj=new verNumero($nro);
        $tipoNumero=$obj->verificaSigno();

     ?>
    <div class="container">
        <h1>Signo del Numero</h1>
        <p> <?php echo($tipoNumero);?> </p>   

    </div>
    


<a href="../vista/index.php">Volver a la pagina anterior</a>
</body>
</html>