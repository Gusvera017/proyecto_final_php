<?php include("./views/layouts/header.php"); ?>
<?php 

include("./models/models.conexionbd.php"); 
include("./models/models.productos.php"); 

?>

<h1 class="tac">HOLA SOY LA PAGINA DE PRODUCTOS</h1>
</br>
<div class="container">
    <div class="row">
        <?php foreach($listadoProductos as $prod) { ?>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img class="card-img-top p-2" src="./views/img/<?php echo $prod['imagen']; ?>" alt="imagen.jpg">
                <div class="card-body">
                    <h5 class="card-title"><span class="d-block text-truncate"><?php echo $prod['nombre']; ?></span></h5>
                    <p class="card-text"><span class="d-block text-truncate"><?php echo $prod['descripcion']; ?></span></p>
                    <a name="" id="" class="btn btn-primary" href="producto.php?id=<?php echo $prod['id']; ?>" role="button">Ver Mas</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("./views/layouts/footer.php"); ?>