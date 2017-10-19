<?php 
		include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';

    $codigo=$_GET['codigo'];
    $motivo=$_GET['motivo'];
//echo $motivo;
//echo $codigo;
    Conexion::abrir_conexion();

    echo Repositorio_libros::DarBaja(Conexion::obtener_conexion(),$codigo,$motivo);
 ?>