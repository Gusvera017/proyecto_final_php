<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/css/estilos.css">
    <link rel="stylesheet" href="./views/css/bootstrap.min.css">
    <title>Productos</title>
</head>

<body>
    <div class="container-fluid mt-5 mb-5 pt-1 pb-1">
        <?php include("./views/layouts/header.php"); ?>
        <h1 class="tac">HOLA SOY LA PAGINA DE PRODUCTOS</h1>
        <!-- comienzo prueba cards -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                            <a name="" id="" class="btn btn-primary" href="#" role="button">Ver Mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                            <a name="" id="" class="btn btn-primary" href="#" role="button">Ver Mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                            <a name="" id="" class="btn btn-primary" href="#" role="button">Ver Mas</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://www.w3schools.com/bootstrap4/img_avatar1.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title">Title</h4>
                            <p class="card-text">Text</p>
                            <a name="" id="" class="btn btn-primary" href="#" role="button">Ver Mas</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin prueba cards -->
        <?php include("./views/layouts/footer.php"); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="./views/js/bootstrap.min.js"></script>
</body>

</html>