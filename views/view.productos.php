<?php include("./views/layouts/header.php"); ?>
<?php 

include("./models/models.conexionbd.php"); 
include("./models/models.productos.php"); 

?>

<h1 class="tac">HOLA SOY LA PAGINA DE PRODUCTOS</h1>
<div class="container">
    <div class="row">
        <?php foreach($listadoProductos as $prod) { ?>
        <div class="col-md-3 mb-4">
            <div class="card">
                <img class="card-img-top" src="./views/img/<?php echo $prod['imagen']; ?>" alt="imagen.jpg">
                <div class="card-body">
                    <h4 class="card-title"><?php echo $prod['nombre']; ?></h4>
                    <p class="card-text"><?php echo $prod['descripcion']; ?></p>
                    <a name="" id="" class="btn btn-primary" href="producto.php?id=<?php echo $prod['id']; ?>" role="button">Ver Mas</a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php include("./views/layouts/footer.php"); ?>