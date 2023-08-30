<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Link bootstrap-->
    <link rel="stylesheet" href="../../bootstrap5/css/bootstrap.min.css">
    <!--Link Icono de bootstrap  con CDN-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <title>Subir Archivo</title>
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
</head>
<body>
    <div class="container w-50">
        <?php
        // mando el form a index.php (carpeta vista), esa a su vez la manda al controller para que se comunique con el modelo
        // esta manera en el index.php que esta en la vsita solo uso ese archivo para mandar distintas respuestas según los resultados  
        // obtengo los datos , lo envio a un accion y luego se los mando al control
        ?>
        <h1 class="p-3 mb-3">Seleccione el archivo a subir</h1>
        <form action="accion/accionArchivo.php" method="POST" enctype="multipart/form-data">
            <div>
                
                <input type="file"  name="archivo" id="archivo">
            </div>
            
            <div class="p-3 mb-3">
                <button type="submit" class="btn btn-primary">Subir</button>

            </div>
            

        </form>
    </div>
    <script type="text/javascript" src="form.js"></script>
</body>
</html>