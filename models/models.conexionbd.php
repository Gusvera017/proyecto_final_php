<?php

/* $conexion = mysqli_connect("localhost:3333", "root", "", "proyecto_final_php") or exit("Fallo la conexión a la base de datos"); */
$host="localhost:3333";
$bd="proyecto_final_php";
$user="root";
$pass="";

try {
        $conexion=new PDO("mysql:host=$host;dbname=$bd",$user,$pass); 
    } catch (Exception $exception) {
        echo $exception->getMessage();
}

?>