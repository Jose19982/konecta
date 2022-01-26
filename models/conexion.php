<?php

class conexion
{

    private $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'konecta');
    }

    public function getProducts()
    {
        $query = $this->con->query('SELECT * FROM productos');

        $return = [];

        $i = 0;

        while ($row = $query->fetch_assoc()) {
            $return[$i] = $row;
            $i++;
        }

        return $return;
    }

    public function createProductos($datos)
    {
        $query = $this->con->query("INSERT INTO `productos`(`nombre_producto`,`referencia`,`precio`,
        `peso`,`categoria`,`stock`,`fecha_creacion`) 
            VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','2022-01-01')");
        return $query;
    }

    public function updateProducto($datos)
    {
        $query = $this->con->query("UPDATE `productos` SET `nombre_producto`='$datos[1]',
        `referencia`='$datos[2]',`precio`='$datos[3]',`peso`='$datos[4]',`categoria`='$datos[5]',
        `stock`='$datos[6]'
         WHERE `productos`.`id`='$datos[0]'");
        return $query;
    }

    public function getModificar($id)
    {
        $query = $this->con->query("SELECT * FROM productos WHERE id='$id'");

        $return = [];

        $i = 0;

        while ($row = $query->fetch_assoc()) {
            $return[$i] = $row;
            $i++;
        }

        return $return;
    }

    public function eliminarProducto($datos)
    {
        $query = $this->con->query("DELETE FROM `productos` WHERE id='$datos[0]'");
        return $query;
    }

    public function venderProducto($datos)
    {
        $query = $this->con->query("INSERT INTO `venta_productos`(`id_producto`,`cantidad_vendida`) 
            VALUES ('$datos[0]','$datos[1]')");
        return $query;
    }

    public function updateProductoCantidad($datos,$resta)
    {
        $query = $this->con->query("UPDATE `productos` SET `stock`='$resta'
         WHERE `productos`.`id`='$datos[0]'");
        return $query;
    }
}
