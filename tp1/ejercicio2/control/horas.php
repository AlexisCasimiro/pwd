<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $horas=0;
        $dias=["lunes","martes","miercoles","jueves","viernes"];

        for ($i=0; $i<count($_GET) ;$i++){
            echo $dias[$i];
            echo $_GET[$dias[$i]]."<br>";
            $horas += $_GET[$dias[$i]];
        }
        echo  "$horas";
    ?>
</body>
</html>