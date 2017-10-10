<?php
$titulo1 = 'pagina de pruebas';
include_once './cabecera.php';
include_once './menu.php';
?>
</nav>

<?php
include_once '../app/Conexion.php';
include_once '../modelos/Categoria.php';
include_once '../repositorios/repositorio_categoria.php';

Conexion::abrir_conexion();

$categoria = new Categoria();
$categoria->setCodigo_tipo('666');
$categoria->setNombre("VVVVV");

Repositorio_categoria::insertar_categoria(Conexion::abrir_conexion(), $categoria);
Conexion::cerrar_conexion();
        
?>
<?php
include_once './pie_de_pagina.php';
?>