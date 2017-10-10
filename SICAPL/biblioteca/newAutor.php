<?php

    include_once '../app/Conexion.php';
    include_once '../modelos/Autores.php';
    include_once '../repositorios/repositorio_autores.inc.php';
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $nacimiento = $_POST["fecha_nac"];
    $biografia = $_POST["bio"];
    Conexion::abrir_conexion();

    $Autor = new Autores();
    $Autor->setNombre($nombre);
    $Autor->setApellido($apellido);
   
    $Autor->setNacimiento($nacimiento);
    $Autor->setBiografia($biografia);
echo Repositorio_autores::insertarAutor(Conexion::obtener_conexion(), $Autor);
    Conexion::cerrar_conexion();


?>