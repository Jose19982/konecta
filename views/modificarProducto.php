<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

require_once "../models/conexion.php";

$con = new conexion();

$array = $con->getModificar($id);

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

    <form action="../processes/actualizarProducto.php" method="post">
        <?php
        foreach ($array as $a) {

            echo '<input type="hidden" id="id" name="id" value='.$a['id'].'><br>';
            echo '<h4>Nombre Producto:</h4><br> <input type="text" id="nombreProducto" name="nombreProducto" value='.$a['nombre_producto'].'><br>';
            echo '<h4>Referencia:</h4><br> <input type="text" id="referencia" name="referencia" value='.$a['referencia'].'><br>';
            echo '<h4>Precio:</h4><br> <input type="number" id="precio" name="precio" value='.$a['precio'].'><br>';
            echo '<h4>Peso:</h4><br> <input type="number" id="peso" name="peso" value='.$a['peso'].'><br>';
            echo '<h4>Categoria:</h4><br> <input type="number" id="categoria" name="categoria" value='.$a['categoria'].'><br>';
            echo '<h4>Cantidad:</h4><br> <input type="number" id="cantidad" name="cantidad" value='.$a['stock'].'><br>';
        }
        ?>
        <input class="btnModificarA" type="submit">
        <a class="btnCancelar" href="verProductos.php">Cancelar</a>
    </form>

</body>

</html>