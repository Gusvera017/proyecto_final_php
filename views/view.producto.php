<?php 

include("./views/layouts/header.php"); 
include("./models/models.conexionbd.php");  
include("./models/models.producto.php"); 

?>
    <div class="jumbotron text-center">
        <h1 class="display-3"><?php echo $nombre; ?></h1>
        <p class="lead"><?php echo $descripcion; ?></p>
        <hr class="my-2">
        <img width="600" src="./views/img/<?php echo $imagen; ?>" class="img-thumbnail rounded mx-auto d-block" alt="imagen.png">
        <p>Más información</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">VER MAS</a>
        </p>
    </div>
<?php include("./views/layouts/footer.php"); ?>