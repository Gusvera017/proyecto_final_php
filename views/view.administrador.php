<?php include("./views/layouts/header.php"); ?>

<?php 
$ID_form=(isset($_POST['ID']))?$_POST['ID']:"";
$nombre_form=(isset($_POST['nombre']))?$_POST['nombre']:"";
$descripcion_form=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
$imagen_form=(isset($_FILES['imagen']['name']))?$_FILES['imagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("./models/models.conexionbd.php");

switch($accion){
    case "Agregar":
        /* mysqli_query($conexion, "INSERT INTO `productos` (`id`, `nombre`, `descripcion`, `imagen`) VALUES (NULL, '$nombre_form', '$descripcion_form', '$imagen_form')"); */
        echo '  <br/>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <div>
                        El Producto se agregó correctamente.
                    </div>
                </div>';
        break;
    case "Editar":
        echo "Presionado botón agregar";
        break;
    case "Cancelar":
        echo "Presionado botón agregar";
        break;
}

?>

<div class="container pt-3">
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Datos del producto
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
                        <div class="form-group mb-3">
                            <label for="ID">ID</label>
                            <input type="text" class="form-control" name="ID" id="ID" placeholder="ID">
                        </div>
                        <div class="form-group mb-3">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre del producto">
                        </div>
                        <div class="form-group mb-3">
                            <label for="descripcion">Descripcion</label>
                            <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Descripcion del producto">
                        </div>
                        <div class="form-group mb-3">
                            <label for="file">Imagen</label>
                            <input type="file" class="form-control" name="imagen" id="nombre" placeholder="ID">
                        </div>
                        <div class="btn-group" role="group" aria-label="">
                            <button type="submit" name="accion" value="Agregar" class="btn btn-success">Agregar</button>
                            <button type="submit" name="accion" value="Editar" class="btn btn-warning">Editar</button>
                            <button type="submit" name="accion" value="Cancelar" class="btn btn-info">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-7">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Imagen</th>
                        <th>Descripción</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>gameboy</td>
                        <td>imagen.jpg</td>
                        <td>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iusto quidem porro, facilis commodi libero quo suscipit aspernatur maxime nemo labore nam eveniet vero perferendis enim et error, iste, aliquid culpa.</td>
                        <td>Seleccionar | Borrar</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php include("./views/layouts/footer.php"); ?>