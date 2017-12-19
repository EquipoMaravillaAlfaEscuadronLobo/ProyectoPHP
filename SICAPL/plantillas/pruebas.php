<?php
$titulo1 = "purebaa";
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>


<?php
include_once '../app/Conexion.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_administrador.inc.php';
Conexion::abrir_conexion();

Repositorio_administrador::numero_administradores(Conexion::obtener_conexion());

?>


<?php
include_once './pie_de_pagina.php';
?>

