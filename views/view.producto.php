<?php 

include("./views/layouts/header.php"); 
include("./models/models.conexionbd.php");  
include("./models/models.producto.php"); 

?>
    <div class="jumbotron text-center">
        <h1 class="display-5"><?php echo $nombre; ?></h1>
        <p class="lead"><?php echo $descripcion; ?></p>
        <hr class="my-2">
        <img width="300" src="./views/img/<?php echo $imagen; ?>" class="img-thumbnail rounded mx-auto d-block" alt="imagen.png"></br>
        <p>Recuerde que cualquier consulta antes de realizar la compra podrá ponerse en contacto con nosotros </br> a través de nuestros canales de comunicación ingresando a <strong>contacto</strong></p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">COMPRAR AHORA</a>
        </p>
    </div>
<?php include("./views/layouts/footer.php"); ?>