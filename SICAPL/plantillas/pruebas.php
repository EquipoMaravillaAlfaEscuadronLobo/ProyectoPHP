<?php
$titulo1 = 'Seguridad';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
include_once '../modelos/Usuario.php';
include_once '../repositorios/repositorio_usuario.inc.php';
include_once '../app/Conexion.php';
//echo $_SESSION['nivel'];  

Conexion::abrir_conexion();
$lista_usuarios = Repositorio_usuario::lista_usuarios(Conexion::obtener_conexion());
?>
</nav>




<?php
include_once '../plantillas/pie_de_pagina.php';
?>


