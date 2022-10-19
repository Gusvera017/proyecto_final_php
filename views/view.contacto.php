<?php include("./views/layouts/header.php"); ?>
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