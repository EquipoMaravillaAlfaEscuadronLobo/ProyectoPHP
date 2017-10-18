<?php
if (isset($_REQUEST["banderaCAtegoria"])&&
     $_POST["nameApellido"] != ""
    && $_POST["nameNombre"] != ""

    ) {
     
          
    include_once '../app/Conexion.php';
    include_once '../modelos/Categoria.php';
    include_once '../repositorios/repositorio_categoria.php';

    
    Conexion::abrir_conexion(); 

    $categoria = new Categoria();
    $categoria->setCodigo_tipo($_REQUEST["nameApellido"]);
    $categoria->setNombre($_REQUEST["nameNombre"]);

    Repositorio_categoria::insertar_categoria(Conexion::obtener_conexion(), $categoria); 
    Conexion::cerrar_conexion();
        
}
?>