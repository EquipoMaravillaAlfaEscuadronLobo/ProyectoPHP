<?php 
    include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    include_once '../repositorios/repositorio_bitacora.php';
    session_start();

    $codigo=$_GET['codigo'];
    $motivo=$_GET['motivo'];
//echo $motivo;
//echo $codigo;
    Conexion::abrir_conexion();
    $nombre_libro = Repositorio_Bitacora::nombre_libro(Conexion::obtener_conexion(), $codigo);
    $accion = 'Se dió de baja al libro ' .$nombre_libro  . '('. $codigo .')' . 'por el siguiente motivo: '. $motivo ;
    Repositorio_Bitacora::insertar_bitacora(Conexion::obtener_conexion(), $accion);

    echo Repositorio_libros::DarBaja(Conexion::obtener_conexion(),$codigo,$motivo);
 ?>