<?php

    include_once '../app/Conexion.php';
    include_once '../modelos/Autores.php';
    include_once '../repositorios/repositorio_autores.inc.php';
    $ruta="../biografias/";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $nacimiento = $_POST["fecha_nac"];
    $biografia =$ruta.basename($_FILES["bio"]["name"]);
    
    Conexion::abrir_conexion();

    $Autor = new Autores();
    $Autor->setNombre($nombre);
    $Autor->setApellido($apellido);
   
    $Autor->setNacimiento($nacimiento);
    if (move_uploaded_file($_FILES['bio']['tmp_name'], $biografia)) {
       $Autor->setBiografia($biografia);
    }else{
        $Autor->setBiografia("");
    }

echo Repositorio_autores::insertarAutor(Conexion::obtener_conexion(), $Autor);
    Conexion::cerrar_conexion();


?>