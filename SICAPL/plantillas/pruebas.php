<?php
$titulo1 = 'pagina de pruebas';
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>

<?php
include_once '../app/Conexion.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_administrador.inc.php';

Conexion::abrir_conexion();

$administrador = new Administrador();
$administrador->setApellido("perez Montana");
$administrador->setCodigo_administrador("juan01");
$administrador->setDui("11111111-1");
$administrador->setEstado(1);
$administrador->setNombre("Jose Luis");
$administrador->setNivel(3);
$administrador->setObservacion("este bicho es malo");
$administrador->setPasword("1234");
$administrador->setSexo(TRUE);

Repositorio_administrador::insertar_administrador(Conexion::obtener_conexion(), $administrador);
Conexion::cerrar_conexion();
        
?>
<?php
include_once './pie_de_pagina.php';
?>