<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Actualizar producto</title>
</head>

<body>
    <div class="container-fluid">
        <h3 class="text-center text-danger mt-3 pt-3">Actualizar</h3> <br>
        <a href="index.php">Volver</a>

        <form action='db/db_update.php' method='GET'>
        <br>
            <?php include 'db/db_deta_update.php'; ?>

            <button type='submit' class="btn btn-outline-info btn-lg my-1 float-left">Actualizar</button>
        </form>

    </div>
</body>

</html>