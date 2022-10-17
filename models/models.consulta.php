<?php
$nombre_form = $_POST['nombre'];
$apellido_form = $_POST['apellido'];
$email_form = $_POST['email'];
$mensaje_form = $_POST['mensaje'];

/* $cuerpo_mail = "Nombre: ". $nombre_form . "\r\n" . "Apellido: ". $apellido_form . "\r\n" . "Correo electrónico: " . $email_form . "\r\n" . "Mensaje: " . $mensaje_form;

mail("gusvera.017@gmail.com", "Probando Mail", $cuerpo_mail); */



// Conexión a BD

$conexion = mysqli_connect("localhost:3333", "root", "", "proyecto_final_php") or exit("No se puede conectar a la base de datos");

mysqli_query($conexion, "INSERT INTO mensajes VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$email_form', '$mensaje_form')");

mysqli_close($conexion);

header("Location: ../contacto.php?envio=success");
?>