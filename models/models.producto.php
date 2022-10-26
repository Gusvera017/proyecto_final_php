<?php

$id = isset($_GET['id'])?$_GET['id']:"";

$querySQL = $conexion->prepare("SELECT nombre, descripcion, imagen FROM productos WHERE id=?");
$querySQL->execute([$id]);
$producto=$querySQL->fetch(PDO::FETCH_ASSOC);
$nombre=$producto['nombre'];
$descripcion=$producto['descripcion'];
$imagen=$producto['imagen'];

?>