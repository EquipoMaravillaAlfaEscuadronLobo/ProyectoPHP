<?php
//    if(($_POST["nombre"]!="")&&($_POST["telefono"]!="")&&($_POST["direccion"]!="")&&($_POST["email"]!="")){
    include_once '../app/Conexion.php';
    include_once '../modelos/Editorial.php';
    include_once '../repositorios/repositorio_editorial.php';
    
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["email"];
    $direccion =$_POST["direccion"];
    
    Conexion::abrir_conexion();

    $Editorial = new Editorial();
    $Editorial->setNombre($nombre);
    $Editorial->setTelefono($telefono);
    $Editorial->setEmail($correo);
    $Editorial->setDireccion($direccion);
    

    echo Repositorio_editorial::insertarEditorial(Conexion::obtener_conexion(), $Editorial);
 //   Conexion::cerrar_conexion();
//    }else{
//        echo '5';
//    }

?>