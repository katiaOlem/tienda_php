<?php
    $nombre = $_GET['nombre'];
    $precio = $_GET['precio'];
    $registrados = $_GET['registrados'];

    $db = new SQLite3('../../tienda.db');

    $db->exec("INSERT INTO productos (producto,precio,registrados) VALUES ('$nombre', '$precio', '$registrados');");
    
    header("Location: ../index.php");

?>
