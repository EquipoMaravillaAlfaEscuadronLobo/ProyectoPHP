<?php
session_start();
include_once '../app/Conexion.php';
include_once '../modelos/Usuario.php';
include_once '../modelos/Institucion.php';
Conexion::abrir_conexion();
include_once '../repositorios/repositorio_usuario.inc.php';
include_once '../repositorios/repositorio_institucion.php';
if (isset($_REQUEST["bandera_registro_institucion"])) {

    $nombre_institucion = $_REQUEST['nameNombreInstitucion'];
    $sql = "INSERT INTO institucion (nombre) VALUES ('$nombre_institucion')";
    $conexion = Conexion::obtener_conexion();
    $sentencia = $conexion->prepare($sql);
    $sentencia->execute();
    
    include_once '../repositorios/repositorio_bitacora.php';
    $accion = 'Se registro la siguiente institucion: ' . $nombre_institucion;
    
    Repositorio_Bitacora::insertar_bitacora(Conexion::obtener_conexion(), $accion);
   // echo $accion;
    
    
    
    //echo 'el nombre es ' . $nombre_institucion;
    
    //Conexion::cerrar_conexion();
}
?>