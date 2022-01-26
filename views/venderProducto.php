<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

require_once "../models/conexion.php";

$con = new conexion();

$arrayProducto = $con->getModificar($id);

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
    <form action="../processes/venderProducto.php" method="post">
        <?php
        foreach ($arrayProducto as $a) {
            echo '<input type="hidden" id="id" name="id" value=' . $a['id'] . '><br>';
            echo '<h3>Nombre Producto:</h3><br> <input type="text" id="nombreProducto" name="nombreProducto" value=' . $a['nombre_producto'] . '><br>';
            echo '<h3>cantidad:</h3><br> <input type="text" id="cantidad" name="cantidad" ><br>';
        }
        ?>
        <input class="btnEnviar" type="submit" id="btnVenderProducto">
        <a class="btnCancelar" href="verProductos.php">Cancelar</a>
    </form>
</body>

</html>