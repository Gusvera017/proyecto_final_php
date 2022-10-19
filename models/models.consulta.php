<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$email_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];

include("models.conexionbd.php");

$sentenciaSQL= $conexion->prepare("INSERT INTO mensajes VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$email_form', '$mensaje_form')");
$sentenciaSQL->execute();
/* mysqli_query($conexion, "INSERT INTO mensajes VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$email_form', '$mensaje_form')");

mysqli_close($conexion); */

header("Location: ../contacto.php?envio=success");
?>