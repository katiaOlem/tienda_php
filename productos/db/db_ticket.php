<?php

    $db = new SQLite3("../tienda.db");

    $resultado = $db->query("SELECT * from ticket;");

    $table = "
        <table class='table' border=3>
            <thead>
            <tr> 
                <th>id_ticket</th>
                <th>Fecha</th>
                <th>Hora venta</th>
                <th>Cantidad producto</th>
                <th>Producto</th>
                <th>Total producto</th>
            </tr>
            </thead>
            ";

    print($table);
    
    while ($fila = $resultado->fetchArray()) {
        $id_ticket = $file['id_ticket'];
        $fecha = $file['fecha'];
        $hora_venta = $file['hora_venta'];
        $cantidad_producto = $file['cantidad_producto'];
        $producto = $file['producto'];
        $total_producto = $file['total_producto'];

        $table = "
            <tr>
                <td>$id_ticket>/td>
                <td>$fecha</td>
                <td>$hora_venta</td>
                <td>$cantidad_producto</td>
                <td>$producto</td>
                <td>$total_producto</td>
            </tr>
        ";

        print($table);
    }
 
    print("</table>");
?>