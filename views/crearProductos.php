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

    <form action="../processes/crearProducto.php" method="post">
        <h4>Nombre Producto:</h4><br> <input type="text" id="nombreProducto" name="nombreProducto"><br>
        <h4>referencia:</h4><br> <input type="text" id="referencia" name="referencia"><br>
        <h4>precio:</h4><br> <input type="number" id="precio" name="precio"><br>
        <h4>peso:</h4><br> <input type="number" id="peso" name="peso"><br>
        <h4>categoria:</h4><br> <input type="number" id="categoria" name="categoria"><br>
        <h4>cantidad:</h4><br> <input type="number" id="cantidad" name="cantidad"><br>
        <input class="btnModificarA" type="submit" id="btnAgregarNuevoProducto">
        <a class="btnCancelar" href="verProductos.php">Cancelar</a>
    </form>
</body>

</html>