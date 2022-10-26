<?php include("./views/layouts/header.php"); ?>
<h1 class="tac">Home</h1>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="productos.php">
                <img src="https://i.pinimg.com/originals/49/06/6c/49066cd709a43dcc797134a62b6eb91f.jpg" class="d-block w-100" alt="imagen.jpg">
            </a>
        </div>
        <div class="carousel-item">
        <a href="productos.php">
                <img src="https://i.pinimg.com/originals/20/48/b7/2048b7e14f93bd7800dabf47ce874ccd.jpg" class="d-block w-100" alt="imagen.jpg">
            </a>
        </div>
        <div class="carousel-item">
        <a href="productos.php">
                <img src="https://i.pinimg.com/originals/e7/66/86/e76686d11259a2d0d8ae5dc2c1c61025.jpg" class="d-block w-100" alt="imagen.jpg">
            </a>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<?php include("./views/layouts/footer.php"); ?>