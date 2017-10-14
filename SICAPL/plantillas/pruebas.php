<?php
include './cabecera.php';
include './menu.php';
include_once '../app/Conexion.php';
include_once '../modelos/Administrador.inc.php';
include_once '../repositorios/repositorio_administrador.inc.php';


Conexion::abrir_conexion();
    $administrador = new Administrador();

    $administrador->setApellido("aaaaa");
    $administrador->setCodigo_administrador("DDD");
    $administrador->setDui("11111111-1");
    $administrador->setEstado(1);
    $administrador->setNombre("iiiii");
    $administrador->setNivel(1);
    $administrador->setObservacion("este bicho es malo XE");
    $administrador->setPasword(11111);
    $administrador->setSexo("MASCULINO");
    $administrador->setEmail("DDDD@DDD");
    $administrador->setFecha("HOY");

    // $administrador->setFoto(addslashes(file_get_contents($_FILES['nameFoto']['tmp_name'])));
    Repositorio_administrador::insertar_administrador(Conexion::obtener_conexion(), $administrador);

Conexion::abrir_conexion();

?>



<?php
include './pie_de_pagina.php';

?>




