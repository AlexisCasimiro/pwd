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
    
    <script src="../../node_modules/jquery/dist/jquery.min.js"></script>
    <title>Leer Archivo </title>
</head>
<body>
<div class="container w-50">

        <h1 class="p-3 mb-3 bg-primary">LECTURA DE UN ARCHIVO</h1>
        <form action="../vista/accionLeerArchivo.php" method="POST" enctype="multipart/form-data">
            <div class="p-3 mb-3">
                <p class="">Subir archivo</p>
                <input type="file"  name="archivo" id="archivo">
            </div>
            
            <div class="p-3 mb-3">
                <button type="submit" class="btn btn-primary">Leer</button>

            </div>
            

        </form>
    </div>

    
</body>
</html>