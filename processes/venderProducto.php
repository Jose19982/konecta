<?php
require_once "../models/conexion.php";

$obj = new conexion();


$datos= array (
  $_POST['id'],
  $_POST['cantidad']
);


$list = $obj->getModificar($_POST['id']);
foreach ($list as $l) {
    $resta = $l['stock'] - $_POST['cantidad'];
}

$obj->updateProductoCantidad($datos,$resta);
echo $obj->venderProducto($datos);
echo '<script>alert("Se ha vendido correctamente")
  window.location = "../views/verProductos.php";</script>';
