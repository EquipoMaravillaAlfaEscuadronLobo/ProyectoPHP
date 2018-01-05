<?php

    include_once '../app/Conexion.php';
    include_once '../modelos/Autores.php';
    include_once '../repositorios/repositorio_autores.inc.php';
    $ruta="../biografias/";
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $nacimiento = $_POST["fecha_nac"];
    $nacimiento=date_format(date_create($nacimiento),'Y-m-d');
    $biografia =$ruta.$_POST["bio"];
    $biografia2=$_POST['bio'];
    
    Conexion::abrir_conexion();

    $Autor = new Autores();
    $Autor->setNombre($nombre);
    $Autor->setApellido($apellido);
   
    $Autor->setNacimiento($nacimiento);
    if (move_uploaded_file($_FILES['bio1']['tmp_name'], $biografia)) {
       $Autor->setBiografia($biografia2);
       
    }else{
        $Autor->setBiografia("");
       // echo basename($FILES['bio1']['name']);
}
echo Repositorio_autores::insertarAutor(Conexion::obtener_conexion(), $Autor);
 //   Conexion::cerrar_conexion();


?>