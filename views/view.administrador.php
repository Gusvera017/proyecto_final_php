<?php include("./views/layouts/header.php"); ?>
<?php include("./models/models.acciones.php"); ?>

<div class="pt-3">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Datos del producto
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="ID">ID</label>
                            <input type="text" required readonly class="form-control" value="<?php echo $ID_form;?>" name="ID" id="ID" placeholder="ID">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" required class="form-control" value="<?php echo $nombre_form;?>"name="nombre" id="nombre" placeholder="Nombre del producto">
                        </div>
                        <div class="form-group mb-3">
                            <label for="descripcion">Descripcion</label>
                            <textarea type="text" required class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion del producto" rows="3"><?php echo $descripcion_form;?></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label for="file">Imagen</label>
                            
                            <?php echo $imagen_form;?>

                            <?php if($imagen_form!=""){ ?>
                                <img class="img-thumbnail" src="./views/img/<?php echo $imagen_form; ?>" width="50" alt="imagen.jpg" srcset="">
                            <?php } ?>

                            <input type="file" class="form-control" name="imagen" id="nombre" placeholder="ID">
                        </div>
                        <div class="btn-group" role="group" aria-label="">
                            <button type="submit" name="accion" <?php echo($accion=="Seleccionar")?"disabled":""; ?> value="Agregar" class="btn btn-success">Agregar</button>
                            <button type="submit" name="accion" <?php echo($accion!="Seleccionar")?"disabled":""; ?> value="Editar" class="btn btn-warning">Editar</button>
                            <button type="submit" name="accion" <?php echo($accion!="Seleccionar")?"disabled":""; ?> value="Cancelar" class="btn btn-danger">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($listadoProductos as $prod) { ?>
                    <tr>
                        <td><?php echo $prod['id']; ?></td>
                        <td><span class="d-inline-block text-truncate" style="max-width: 150px;"><?php echo $prod['nombre']; ?></span></td>
                        <td><span class="d-inline-block text-truncate" style="max-width: 150px;"><?php echo $prod['descripcion']; ?></span></td>
                        <td>
                            <img class="img-thumbnail" src="./views/img/<?php echo $prod['imagen']; ?>" width="50" alt="imagen.jpg" srcset="">
                        </td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="ID" id="ID" value="<?php echo $prod['id']; ?>"/>
                                <input type="submit" name="accion" value="Seleccionar" class="btn btn-info"/>
                                <input type="submit" name="accion" value="Borrar" class="btn btn-danger"/>
                            </form>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("./views/layouts/footer.php"); ?>