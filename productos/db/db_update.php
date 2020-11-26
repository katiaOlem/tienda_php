<?php

    $id_producto = $_GET["id_producto"];
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];
    $registrados = $_GET['registrados'];

    $db = new SQLite3('../../tienda.db');
    $db->exec("UPDATE productos SET producto='$producto', precio='$precio', registrados='$registrados'  WHERE id_producto='$id_producto';");
    header("Location: ../index.php");

?>
