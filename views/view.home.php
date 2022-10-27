<?php include("./views/layouts/header.php"); ?>
<h1 class="tac">Home</h1>
<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <a href="productos.php">
                <img src="https://www.cdmarket.com.ar/Pubs/Sites/Default/Custom/prox-xs.jpg" class="d-block w-100" alt="imagen.jpg">
            </a>
        </div>
        <div class="carousel-item">
        <a href="productos.php">
                <img src="https://www.cdmarket.com.ar/Pubs/Sites/Default/Custom/ofertas-5999-xs.jpg" class="d-block w-100" alt="imagen.jpg">
            </a>
        </div>
        <div class="carousel-item">
        <a href="productos.php">
                <img src="https://www.cdmarket.com.ar/Pubs/Sites/Default/Custom/pcarmada-xs.jpg" class="d-block w-100" alt="imagen.jpg">
            </a>
        </div>
        <div class="carousel-item">
        <a href="productos.php">
                <img src="https://www.cdmarket.com.ar/Pubs/Sites/Default/Custom/p-nb-xs.jpg" class="d-block w-100" alt="imagen.jpg">
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