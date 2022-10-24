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
        $querySQL = $conexion->prepare("INSERT INTO productos (nombre,descripcion,imagen) VALUES (:nombre,:descripcion,:imagen);");
        $querySQL->bindParam(':nombre',$nombre_form);
        $querySQL->bindParam(':descripcion',$descripcion_form);
        
        $fecha = new DateTime();
        $nombreArchivo=($imagen_form!="")?$fecha->getTimestamp()."_".$_FILES["imagen"]["name"]:"imagen.jpg";
        
        $tmpImagen=$_FILES["imagen"]["tmp_name"];

        if($tmpImagen!=""){
            move_uploaded_file($tmpImagen, "./views/img/".$nombreArchivo);
        }

        $querySQL->bindParam(':imagen',$nombreArchivo);
        $querySQL->execute();
        echo '  <br/>
                <div class="alert alert-success d-flex align-items-center" role="alert">
                    <div>
                        El Producto se agregó correctamente.
                    </div>
                </div>';
        break;
    case "Editar":

        $querySQL = $conexion->prepare("UPDATE productos SET nombre=:nombre,descripcion=:descripcion WHERE id=:id");
        $querySQL->bindParam(':id',$ID_form);
        $querySQL->bindParam(':nombre',$nombre_form);
        $querySQL->bindParam(':descripcion',$descripcion_form);
        $querySQL->execute();

        if($imagen_form!=""){

            $fecha = new DateTime();
            $nombreArchivo=($imagen_form!="")?$fecha->getTimestamp()."_".$_FILES["imagen"]["name"]:"imagen.jpg";
            $tmpImagen=$_FILES["imagen"]["tmp_name"];
            move_uploaded_file($tmpImagen, "./views/img/".$nombreArchivo);

            $querySQL = $conexion->prepare("SELECT imagen FROM productos WHERE id=:id");
            $querySQL->bindParam(':id',$ID_form);
            $querySQL->execute();
            $producto=$querySQL->fetch(PDO::FETCH_LAZY);

            if(isset($producto["imagen"])&&($producto["imagen"]!="imagen.jpg")){
                if(file_exists("./views/img/".$producto["imagen"])){
                    unlink("./views/img/".$producto["imagen"]);
                }
            }

            $querySQL = $conexion->prepare("UPDATE productos SET imagen=:imagen WHERE id=:id");
            $querySQL->bindParam(':id',$ID_form);
            $querySQL->bindParam(':imagen',$nombreArchivo);
            $querySQL->execute();
        }
        echo '  <br/>
                <div class="alert alert-warning d-flex align-items-center" role="alert">
                    <div>
                        El Producto se modificó correctamente.
                    </div>
                </div>';
        break;
    case "Cancelar":
        header("Location:administrador.php");
        break;
    case "Seleccionar":
        $querySQL = $conexion->prepare("SELECT * FROM productos WHERE id=:id");
        $querySQL->bindParam(':id',$ID_form);
        $querySQL->execute();
        $producto=$querySQL->fetch(PDO::FETCH_LAZY);

        $nombre_form=$producto['nombre'];
        $descripcion_form=$producto['descripcion'];
        $imagen_form=$producto['imagen'];
        break;
    case "Borrar":
        $querySQL = $conexion->prepare("SELECT imagen FROM productos WHERE id=:id");
        $querySQL->bindParam(':id',$ID_form);
        $querySQL->execute();
        $producto=$querySQL->fetch(PDO::FETCH_LAZY);

        if(isset($producto["imagen"])&&($producto["imagen"]!="imagen.jpg")){
            if(file_exists("./views/img/".$producto["imagen"])){
                unlink("./views/img/".$producto["imagen"]);
            }
        }
        
        $querySQL = $conexion->prepare("DELETE FROM productos WHERE id=:id");
        $querySQL->bindParam(':id',$ID_form);
        $querySQL->execute();
        echo '  <br/>
                <div class="alert alert-danger d-flex align-items-center" role="alert">
                    <div>
                        El Producto se eliminó correctamente.
                    </div>
                </div>';
        break;
}

$querySQL = $conexion->prepare("SELECT * FROM productos");
$querySQL->execute();
$listadoProductos=$querySQL->fetchAll(PDO::FETCH_ASSOC);

?>

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
                            <input type="text" required class="form-control" value="<?php echo $descripcion_form;?>" name="descripcion" id="descripcion" placeholder="Descripcion del producto">
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
                        <td><?php echo $prod['nombre']; ?></td>
                        <td><?php echo $prod['descripcion']; ?></td>
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