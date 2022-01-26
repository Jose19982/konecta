<?php
require_once "../models/conexion.php";

$obj = new conexion();


$datos = array(
  $_GET['id']
);
echo $obj->eliminarProducto($datos);

echo '<script>alert("Se ha eliminado el producto con éxito!")
  window.location = "../views/verProductos.php";</script>';