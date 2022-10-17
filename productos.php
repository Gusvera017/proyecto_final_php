<?php

require_once "controllers/productos.controller.php";

$productos = new ProductosController();
$productos -> getProductos();

?>