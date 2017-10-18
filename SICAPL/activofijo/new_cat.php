<?php
//if (isset($_REQUEST["bandera1"])) {
     
     echo '<script>swal("Excelente!", "Registro guardado con exito", "success");</script>';      
    include_once '../app/Conexion.php';
    include_once '../modelos/Activo.php';
    include_once '../modelos/Detalles.php';
    include_once '../repositorios/repositorio_activo.php';
    include_once '../repositorios/repositorio_detalles.php';
    Conexion::abrir_conexion(); 
    $cant = $_REQUEST["cantidad"];
    
    $detalle = new Detalles();
    $detalle->setSeri($_REQUEST["nserie"]);
    $detalle->setSeri($_REQUEST["color"]);
    $detalle->setSeri($_REQUEST["marca"]);
    $detalle->setSeri($_REQUEST["so"]);
    $detalle->setSeri($_REQUEST["dimensiones"]);
    $detalle->setSeri($_REQUEST["ram"]);
    $detalle->setSeri($_REQUEST["modelo"]);
    $detalle->setSeri($_REQUEST["dd"]);
    $detalle->setSeri($_REQUEST["pro"]);
    $detalle->setOtros($_REQUEST["otro"]);
    Repositorio_detalle::insertar_detalle(Conexion::obtener_conexion(), $detalle);
    $activo = new Activo();
    $activo->setCodigo_activo($_REQUEST["CEJ-2017-001-01"]);
    $activo->setCodigo_administrador($_REQUEST["admin"]);
    $activo->setFecha_adquicision($_REQUEST["fecha_adq"]);
    $activo->setCodigo_tipo($_REQUEST["selectCat"]);
    $activo->setPrecio($_REQUEST["precioUnitario"]);
    $activo->setCodigo_proveedor($_REQUEST["selectPro"]);
    $activo->setFoto($_REQUEST["fotoActivo"]);
    $activo->setEstado('1');
    $activo->setCodigo_detalle(Repositorio_detalle::obtener_ultimo_detale());
    Repositorio_activo::insertar_activo(Conexion::obtener_conexion(), $activo); 
    Conexion::cerrar_conexion();
        
//}
?>