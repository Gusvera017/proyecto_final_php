<?php 
$ID_form=(isset($_POST['ID']))?$_POST['ID']:"";
$nombre_form=(isset($_POST['nombre']))?$_POST['nombre']:"";
$descripcion_form=(isset($_POST['descripcion']))?$_POST['descripcion']:"";
$imagen_form=(isset($_FILES['imagen']['name']))?$_FILES['imagen']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";

include("models.conexionbd.php");

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

include("models.productos.php");

?>