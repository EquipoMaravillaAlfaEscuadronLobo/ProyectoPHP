<?php
$titulo1 = 'Seguridad';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/menu.php';
include_once '../modelos/Usuario.php';
include_once '../repositorios/repositorio_notificaciones.php';
include_once '../app/Conexion.php';
//echo $_SESSION['nivel'];  

Conexion::abrir_conexion();

?>
</nav>
<?php
 $notificaciones= repositorio_notificaciones::numero_notifiaciones(Conexion::obtener_conexion());
 echo $notificaciones;

include_once '../plantillas/pie_de_pagina.php';
?>


