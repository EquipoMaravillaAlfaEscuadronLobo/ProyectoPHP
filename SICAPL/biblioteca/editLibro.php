<?php 
    include_once '../app/Conexion.php';
    include_once '../modelos/Libros.php';
    include_once '../repositorios/respositorio_libros.php';
include_once '../plantillas/cabecera.php';
    include_once '../plantillas/pie_de_pagina.php';
    $ruta='../fotoLibros/';

    $codigo=$_POST["codigol_edit"];
    //$estado=0;

    $titulo = $_POST["titulo_edit"];
    
   // $editorial = $_POST["editorial_edit"];
    //echo $editorial;
   // $cantidad=$_POST["cantidad_edit"];
    $publicacion = $_POST["fecha_pub_edit"];
    
    $foto =$ruta.basename($_FILES["foto1"]["name"]);
    $foto2=basename($_FILES["foto1"]["name"]);

    if($foto2==""){
        $foto2=$_POST['foto1'];
        $foto ="";

    }
    //echo $foto2;
    Conexion::abrir_conexion();
    echo $publicacion;
    $Libro = new Libros();
    $Libro->setTitulo($titulo);
    //$Libro->setEditoriales_codigo($editorial);
   	$Libro->setCodigo_libro($codigo);
    $Libro->setFecha_publicacion($publicacion);
    //$Libro->setEstado($estado);
    if($foto!=""){
    if (move_uploaded_file($_FILES['foto1']['tmp_name'], $foto)) {
       $Libro->setFoto($foto2);
      // echo "1";
    }else{
        $Libro->setFoto("");
        //echo "2";
    }
}else{
    $Libro->setFoto($foto2);
}
   // echo Repositorio_libros::EditarLibro(Conexion::obtener_conexion(), $Libro);
    if (Repositorio_libros::EditarLibro(Conexion::obtener_conexion(), $Libro)==1) {
        //echo "hasta aki";
        echo "<script type='text/javascript'>";
        echo "swal({
                    title: 'Exito',
                    text: 'Libro Actualizado    ',
                    type: 'success'},
                    function(){
                       location.href='inicio_b.php';
                       
                     
                        
                    }

                    );";
        //echo "alert('datos actualizados')";
        //echo "location.href='inicio_b.php'";
        echo "</script>";
    }else{
        echo "<script type='text/javascript'>";
        echo 'swal({
                    title: "Ooops",
                    text: "Libro no Actualizado",
                    type: "error"},
                    function(){
                       location.href="inicio_b.php";
                       
                     
                        
                    }

                    );';
//echo "alert('datos no atualizados')";
//echo "location.href='inicio_b.php'";
        echo "</script>";
    }
    
 ?>