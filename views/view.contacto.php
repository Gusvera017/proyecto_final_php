<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./views/css/estilos.css">
    <link rel="stylesheet" href="./views/css/bootstrap.min.css">
    <title>Contacto</title>
</head>

<body>
    <div class="container-fluid mt-5 pt-1">
        <?php include("./views/layouts/header.php"); ?>
        <!-- revisar el container porque no se ve el Home -->
        <div class="container p-3">
            <div class="container-fluid p-2 border border-3">
                <section>
                    <?php
                    if (isset($_GET['envio'])) {
                        echo '
                    <div class="alert alert-success d-flex align-items-center" role="alert">
                        <div>
                        El Mensaje se envió correctamente.
                        </div>
                    </div>';
                    }
                    ?>
                    <form action="./models/models.consulta.php" method="POST">

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                            <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Apellido</label>
                            <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Ingrese su Email" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
                            <textarea name="mensaje" class="form-control" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary mb-3">Enviar</button>
                        </div>

                    </form>
                </section>
            </div>
        </div>
    </div>
    <?php include("./views/layouts/footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="./views/js/bootstrap.min.js"></script>
</body>

</html>