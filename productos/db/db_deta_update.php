
<?php

    $id_producto = $_GET["id_producto"];

    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from productos where id_producto='$id_producto';");

    while ($row = $resultado->fetchArray()) {
        $id_producto = $row["id_producto"];
        $producto = $row['producto'];
        $precio = $row['precio'];
        $registrados = $row['registrados'];
    }

    $form = "
        <div class='form-group font-weight-bold'>
            <label for='id_producto'>ID</label>
            <input type='text' readonly class='form-control' id='id_producto' name='id_producto' aria-describedby='ID producto' value='$id_producto'>
        </div>
        <div class='form-group font-weight-bold'>
            <label for='producto'>Nombre</label>
            <input type='text' class='form-control' id='producto' name='producto' aria-describedby='producto' value='$producto'>
        </div>
        <div class='form-group font-weight-bold'>
            <label for='precio'>Precio</label>
            <input type='number' step='any' class='form-control' id='precio' name='precio' aria-describedby='precio' value='$precio'>
        </div>
        <div class='form-group font-weight-bold'>
            <label for='registrados'>Cantidad</label>
            <input type='number' class='form-control' id='registrados' name='registrados' aria-describedby='precio' value='$registrados'>
        </div>
        ";

    print($form);
?>
