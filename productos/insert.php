<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Agregar Producto</title>
</head>
<body>
    <div class="container-fluid">
        <h3 class="text-center mt-2 pt-2 text-danger">Agregar</h3>
        <br>
        <a href="index.php">Volver</a> 
        <form action="db/db_insert.php" method="GET">
            <div class="form-group">
               <br>
               <label for="nombre" class="font-weight-bold">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="nombre" placeholder="Agregar">
            </div>
            <div class="form-group">
                <label for="precio" class="font-weight-bold">Precio</label>
                <input type="number" class="form-control" id="precio" step="any" name="precio" aria-describedby="precio" placeholder="Precio">
            </div>
            <div class="form-group">
                <label for="registrados" class="font-weight-bold">Cantidad</label>
                <input type="number" class="form-control" id="" name="registrados" aria-describedby="registrados" placeholder="Registro">
            </div>
            <br>
            <button type="submit" class="btn btn-outline-warning btn-lg my-1 float-right ">Agregar</button>
        </form>
    </div>
</body>
</html>