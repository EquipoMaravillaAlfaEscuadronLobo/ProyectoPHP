<?php

    include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
    $ruta='../fotoLibros/';

    $codigo=$_POST["codigo"];
    $estado=0;

    $titulo = $_POST["titulo"];
    $autores = $_POST["autores"];
    $editorial = $_POST["editorial"];
    //echo $editorial;
    $cantidad=$_POST["cantidad"];
    $publicacion = $_POST["fecha_pub"];
    $foto =$ruta.basename($_FILES["foto"]["name"]);
    Conexion::abrir_conexion();

    $Libro = new Libros();
    $Libro->setTitulo($titulo);
    $Libro->setEditoriales_codigo($editorial);
   	$Libro->setCodigo_libro($codigo);
    $Libro->setFecha_publicacion($publicacion);
    $Libro->setEstado($estado);

    if (move_uploaded_file($_FILES['foto']['tmp_name'], $foto)) {
       $Libro->setFoto($foto);
       echo "1";
    }else{
        $Libro->setFoto("");
        echo "2";
    }

//echo Repositorio_libros::insertarLibros(Conexion::obtener_conexion(), $Libro, $cantidad, $autores);
    Conexion::cerrar_conexion();


?>