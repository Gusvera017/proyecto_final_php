<?php

require_once "controllers/contacto.controller.php";

$contacto = new ContactoController();
$contacto -> getContacto();

?>