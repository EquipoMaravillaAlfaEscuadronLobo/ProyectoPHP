<?php
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>

<?php
include_once '../app/Conexion.php';
Conexion::abrir_conexion();
Conexion::cerrar_conexion();

?>




<?php
include_once './pie_de_pagina.php';
?>