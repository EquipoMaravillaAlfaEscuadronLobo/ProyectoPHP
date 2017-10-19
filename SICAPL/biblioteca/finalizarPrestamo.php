<?php 

include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/repositorio_prestamolib.inc.php';

    $codigo=$_GET['codigo'];
    $motivo=$_GET['motivo'];

    Conexion::abrir_conexion();

    echo repositorio_prestamolib::Finalizar(Conexion::obtener_conexion(),$codigo,$motivo);
 ?>