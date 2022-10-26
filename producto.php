<?php

require_once "controllers/producto.controller.php";

$producto = new ProductoController();
$producto -> getProducto();

?>