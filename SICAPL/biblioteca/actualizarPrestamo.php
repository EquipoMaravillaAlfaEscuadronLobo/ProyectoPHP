<?php 
session_start();
include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/repositorio_prestamolib.inc.php';
    include_once '../repositorios/repositorio_bitacora.php';

    $codigo=$_GET['codigo'];
    $fecha=$_GET['fecha'];
    $fecha = date_format(date_create($fecha), 'Y-m-d');

    Conexion::abrir_conexion();

    $codigo_usuario = Repositorio_Bitacora::codigo_usuario_por_codigo_prestamo(Conexion::obtener_conexion(), $codigo);
    $identificacion_usuario = Repositorio_Bitacora::nombre_usuario(Conexion::obtener_conexion(), $codigo_usuario);
    
    $accion = 'el usuario ' . $identificacion_usuario . ' actualizo su prestamo a la siguiente fecha: ' . $fecha ;
    Repositorio_Bitacora::insertar_bitacora(Conexion::obtener_conexion(), $accion);
    $estadop= repositorio_prestamolib::Actualizar(Conexion::obtener_conexion(),$codigo,$fecha);
    
    echo $estadop;
    
 ?>