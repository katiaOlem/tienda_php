<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
    <title>Productos Registrados</title>
</head>

<body>
    <div class="container-fluid">
        <h3 class="text-center text-danger mt-3 pt-3">Productos Registrados</h3>
        <br>
        <?php include 'db/db_list.php'; ?>
        <br>
        <a href="insert.php" class="btn btn-outline-secondary btn-lg my-1 float-left ">Producto Nuevo</a>

    </div>
</body>

</html>