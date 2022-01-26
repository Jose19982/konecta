ejecutar el archivo index.php
si no se lanza, escribir en la url localhost/views/verProductos.php

Crear la base de datos en mysql con los siguientes scripts

CREATE SCHEMA `konecta` ;

use konecta;

CREATE TABLE `konecta`.`productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre_producto` VARCHAR(45) NOT NULL,
  `referencia` VARCHAR(45) NOT NULL,
  `precio` INT(11) NOT NULL,
  `peso` INT(11) NOT NULL,
  `categoria` VARCHAR(45) NOT NULL,
  `stock` INT(11) NOT NULL,
  `fecha_creacion` DATE NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

CREATE TABLE `konecta`.`venta_productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_producto` INT(11) NOT NULL,
  `cantidad_vendida` INT(11) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;

Desplegar la aplicacion en un servidor como XAMPP.

para la base de datos el usuario es root la ip es localhost, sin contraseña;

Setencia para obtener el producto con mayor stock:
select MAX(stock) stock, nombre_producto, referencia, precio, peso, categoria, fecha_creacion fechaCreacion
from productos;

Sentencia para obtener el producto que mas se vendio:
select MAX(vp.cantidad_vendida) cantidadVendida, p.nombre_producto, p.referencia, p.precio, p.peso, p.categoria, p.fecha_creacion fechaCreacion
from venta_productos vp join productos p on vp.id_producto = p.id ;
