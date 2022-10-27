# Proyecto final de php
El proyecto consiste en un comercio para comprar articulos de tecnologia.
_______________________________________________________________

## Estructura del proyecto:

### Home
Al ingresar al sitio web se visualiza en el home un menu de navegación, un carrusel de imagenes y un footer.
Se puede ingresar a la sección de productos tanto haciendo click en el carrusel como en la solapa "productos".

### Productos
Dentro de la sección productos los mismo se visualizan en formato de tarjetas, cada uno de ellos cuenta con su nombre, descripción, imagen y un botón para ingresar al producto individual.

### Producto
Dentro del producto se puede ver el detalle completo de mismo, contiene un botón para realizar la compra.

### Contacto
En la sección de contacto se puede dejar un mensaje al administrador, se debe indicar el nombre, apellido, mail y mensaje a enviar.
Todos los mensajes enviados desde el sitio van a la base de datos.

### Panel para el administrador
Agregando en el index a la url /administrador.php (ejemplo: www.misitio.com/administrador.php) se puede visualizar el panel de administración de productos, donde se pueden agregar, modificar o borrar. 
Cuenta con un panel form a la izquerda para agregar los productos y tambien editarlos. En la parte derecha contiene la tabla con los productos totales extraidos de la base de datos, cuenta con un boton para seleccionar el producto y modificarlo (en el panel izquierdo los datos aparecerán para ser modificados.), también tiene una botón para eliminar los productos.
Toda acción realizada en el panel del administrador se replica automaticamente en la base de datos.
_______________________________________________________________

## Estructura de las carpetas(*) y los archivos(+):

* controllers
    + administrador.controller.php
    + contacto.controller.php
    + index.controller.php
    + producto.controller.php
    + productos.controller.php
* models
    * config
        + proyecto_final_php.sql
    + models.acciones.php
    + models.conexionbd.php
    + models.consulta.php
    + models.productos.php
    + models.producto.php
* views
    * css
        + bootstrap.min.css
        + estilos.css
    * img
	+ img.jpg
	+ img.jpg
	+ img.jpg
    * js
        + bootstrap.min.js
    * layouts
        + footer.php
        + header.php
    + view.administrador.php
    + view.contacto.php
    + view.index.php
    + view.producto.php
    + view.productos.php
+ administrador.php
+ contacto.php
+ index.php
+ producto.php
+ productos.php
_______________________________________________________________

## Descarga del proyecto para trabajo local
Para descargar el proyecto de forma local es necesario contar con:

* Un editor de código (el utilizado en este proyecto fue el Visual Studio Code)
https://code.visualstudio.com/

* Un interprete de lenguaje PHP y MySQL como por ejemplo XAMPP 
https://www.apachefriends.org/es/index.html

Una vez descargado el proyecto se debe importar la base de datos en localhost/phpmyadmin, el archivo SQL para implementar se encuentra dentro del directorio /models/config/proyecto_final_php.sql
_______________________________________________________________

## Link del proyecto 
https://gus017.000webhostapp.com/index.php

_______________________________________________________________
