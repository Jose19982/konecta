<?php
require_once "../models/conexion.php";

$obj = new conexion();


$datos= array (
  $_POST['nombreProducto'],
  $_POST['referencia'],
  $_POST['precio'],
  $_POST['peso'],
  $_POST['categoria'],
  $_POST['cantidad'],
);

echo $obj->createProductos($datos);

echo '<script>alert("Se ha creado con éxito el producto!")
  window.location = "../views/verProductos.php";</script>';
?> 