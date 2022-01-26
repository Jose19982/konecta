<?php
require ("../models/conexion.php");

$con = new conexion();

$products = $con->getProducts();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-sacle=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style/style.css">
    <title>Index</title>

</head>

<body>

    <?php require_once "navbar.php"; ?>
    <h3 class="mainTittle">Productos En Inventario</h3>

        <a class="btnCrear" href="crearProductos.php">Crear Productos</a>

    <table id="tableProducts">
        <thead>
            <tr>
                <td>
                    Nombre Producto
                </td>
                <td>
                    Referencia
                </td>
                <td>
                    Precio
                </td>
                <td>
                    Peso
                </td>
                <td>
                    Categoria
                </td>
                <td>
                    Cantidad
                </td>
                <td>
                    Modificar
                </td>
                <td>
                    Eliminar
                </td>
                <td>
                    Vender producto
                </td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($products as $pro) {
                echo "<tr>";
                echo "<td>" . $pro['nombre_producto'] . "</td>";
                echo "<td>" . $pro['referencia'] . "</td>";
                echo "<td>" . $pro['precio'] . "</td>";
                echo "<td>" . $pro['peso'] . "</td>";
                echo "<td>" . $pro['categoria'] . "</td>";
                echo "<td>" . $pro['stock'] . "</td>";
                echo "<td><a class='btnModificar' href='modificarProducto.php?id=" . $pro['id'] . "' >modificar</a> </td>";
                echo "<td><a class='btnEliminar' href='../processes/eliminarProducto.php?id=" . $pro['id'] . "' >Eliminar</a> </td>";
                echo "<td><a class='btnVender' id='myBtn' href='venderProducto.php?id=" . $pro['id'] . "' >Vender</a> </td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>


</body>

</html>