<?php 

    $querySQL = $conexion->prepare("SELECT * FROM productos");
    $querySQL->execute();
    $listadoProductos=$querySQL->fetchAll(PDO::FETCH_ASSOC);

?>
