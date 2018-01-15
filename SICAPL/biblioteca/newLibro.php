<style>
    body{
        color: white !important;
    }
</style>
<?php
include_once('../plantillas/cabecera.php');
if(($_POST["titulo"]!="")&&($_POST["autores"]!="")&&($_POST["editorial"]!=0)&&
    ($_POST["cantidad"]!="")&&($_POST["fecha_pub"]!="")){
include_once '../app/Conexion.php';
include_once '../modelos/Libros.php';
include_once '../repositorios/respositorio_libros.php';
$ruta = '../fotoLibros/';

$codigo = $_POST["codigo"];
$estado = 0;

$titulo = $_POST["titulo"];
$autores = $_POST["autores"];
$editorial = $_POST["editorial"];
//echo $editorial;
$cantidad = $_POST["cantidad"];
$publicacion = $_POST["fecha_pub"];
$publicacion = date_format(date_create($publicacion), 'Y-m-d');
$foto = $ruta . basename($_FILES["foto"]["name"]); ///ruta
$foto2 = basename($_FILES["foto"]["name"]); //nombre de archivo
Conexion::abrir_conexion();

$Libro = new Libros();
$Libro->setTitulo($titulo);
$Libro->setEditoriales_codigo($editorial);
$Libro->setCodigo_libro($codigo);
$Libro->setFecha_publicacion($publicacion);
$Libro->setEstado($estado);

if (move_uploaded_file($_FILES['foto']['tmp_name'], $foto)) {
    $Libro->setFoto($foto2);
    // echo "1";
} else {
    $Libro->setFoto("");
    //echo "2";
}

if(Repositorio_libros::insertarLibros(Conexion::obtener_conexion(), $Libro, $cantidad, $autores)){
    echo "<script>";
    echo ' swal({
        title: "Exito!",
        text: "Libros Registrados desea imprimir el codigo de barras?",
        type: "success",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Sí, Imprimir",
        cancelButtonText: "No, Salir",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function (isConfirm) {
        if (isConfirm) {
            var url = "../reportes/imprimir_barcode.php?codigo=' . $codigo . '" ;

            var a = document.createElement("a");
            a.target = "_blank";
            a.href = url;
            a.click();
        } else {
            location.href = "inicio_b.php";
        }
    });';
    echo "</script>";
}
//   Conexion::cerrar_conexion();

}else{
    echo 5;
}

include_once('../plantillas/pie_de_pagina.php');
?>


