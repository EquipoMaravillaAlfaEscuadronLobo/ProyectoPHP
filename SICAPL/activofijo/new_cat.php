
<?php

     
     
    include_once '../app/Conexion.php';
    include_once '../modelos/Categoria.php';
    include_once '../repositorios/repositorio_categoria.php';

    
    Conexion::abrir_conexion(); 

    $categoria = new Categoria();
    $categoria->setCodigo_tipo($_POST["nameApellido"]);
    $categoria->setNombre($_POST["nameNombre"]);

    Repositorio_categoria::insertar_categoria(Conexion::obtener_conexion(), $categoria); 
    Conexion::cerrar_conexion();
  

?>