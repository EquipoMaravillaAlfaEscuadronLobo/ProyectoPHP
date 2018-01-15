<?php 
session_start();
include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/repositorio_prestamolib.inc.php';
    include_once '../repositorios/repositorio_bitacora.php';

    $codigop=$_GET['codigop'];
    $codigol=$_GET['codigol'];
    

    Conexion::abrir_conexion();

    $codigo_usuario = Repositorio_Bitacora::codigo_usuario_por_codigo_prestamo(Conexion::obtener_conexion(), $codigop);
    $identificacion_usuario = Repositorio_Bitacora::nombre_usuario(Conexion::obtener_conexion(), $codigo_usuario);
    
    $accion = 'El usuario ' . $identificacion_usuario . ' devolvió el libro ' . $codigol ;
    Repositorio_Bitacora::insertar_bitacora(Conexion::obtener_conexion(), $accion);
    
    echo repositorio_prestamolib::CambiarEstado(Conexion::obtener_conexion(),$codigol, 0);
 ?>