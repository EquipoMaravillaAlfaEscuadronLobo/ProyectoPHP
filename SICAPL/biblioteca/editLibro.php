<?php 
    include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';

    //$ruta='../fotoLibros/';

    $codigo=$_POST["codigol_edit"];
    $estado=0;

    $titulo = $_POST["titulo_edit"];
    
    $editorial = $_POST["editorial_edit"];
    //echo $editorial;
    $cantidad=$_POST["cantidad_edit"];
    $publicacion = $_POST["fecha_pub_edit"];
    
    Conexion::abrir_conexion();

    $Libro = new Libros();
    $Libro->setTitulo($titulo);
    $Libro->setEditoriales_codigo($editorial);
   	$Libro->setCodigo_libro($codigo);
    $Libro->setFecha_publicacion($publicacion);
    $Libro->setEstado($estado);

    
 ?>