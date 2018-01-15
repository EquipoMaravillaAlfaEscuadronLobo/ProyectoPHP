<?php
$titulo1="";
include_once '../app/Conexion.php';
include_once '../modelos/Prestamo.inc.php';
include_once '../repositorios/repositorio_prestamolib.inc.php';
include_once '../repositorios/repositorio_bitacora.php';
include_once '../plantillas/cabecera.php';
include_once '../plantillas/pie_de_pagina.php';
Conexion::abrir_conexion();

$usuario = $_POST['codigouser'];
$salida = $_POST['fecha_salida'];
$devolucion = $_POST['fecha_devolucion'];
$devolucion = date_format(date_create($devolucion), 'Y-m-d');
$libros = $_POST['num'];
//echo $usuario;
$Prestamo = new PrestamoLibro();
$Prestamo->setUsuario($usuario);
$Prestamo->setSalida($salida);
$Prestamo->setDevolucion($devolucion);

if (Repositorio_prestamolib::GuardarPrestamo(Conexion::obtener_conexion(), $Prestamo)) {
    //	echo "hasta aki";
    $prestamo1 = Repositorio_prestamolib::obtenerUltimo(Conexion::obtener_conexion());
    //echo $prestamo1;
     $identificacion_usuario = Repositorio_Bitacora::nombre_usuario(Conexion::obtener_conexion(), $usuario);
    $accion = 'El usuario '.$identificacion_usuario.' presto los siguientes libros ';
    $librosN = '';
    for ($i = 1; $i <= $libros; $i++) {
        if(isset($_POST['codigol' . $i])){
        if(!Repositorio_prestamolib::GuardarLibros(Conexion::obtener_conexion(), $prestamo1, $_POST['codigol' . $i])){ 
            echo "<script type='text/javascript'>";
            echo 'swal({
                    title: "Ooops",
                    text: "Prestamo no Registrado",
                    type: "error"},
                    function(){
                       location.href="inicio_b.php";
                       
                     
                        
                    }

                    );';
//echo "alert('datos no atualizados')";
//echo "location.href='inicio_b.php'";
            echo "</script>";
        }else{
            Repositorio_prestamolib::cambiarEstado(Conexion::obtener_conexion(), $_POST['codigol' . $i], 2);
           
        
    
    
        $identificacion_libro = Repositorio_Bitacora::nombre_libro(Conexion::obtener_conexion(), $_POST['codigol' . $i]);
        $librosN = $librosN .' ' .$identificacion_libro . '('. $_POST['codigol' . $i] . ')';
    
    
    //echo $accion;
            
    //////aqui termina la bitacora
   
        }
    }
    }
    
    ////eto es para la bitacora
    $accion = $accion . " " . $librosN;
    Repositorio_Bitacora::insertar_bitacora(Conexion::obtener_conexion(), $accion);
     echo "<script type='text/javascript'>";
    echo "swal({
                    title: 'Exito',
                    text: 'Prestamo Registrado',
                    type: 'success'},
                    function(){
                       location.href='inicio_b.php';
                       
                     
                        
                    }

                    );";
  
    echo "</script>";
}
?>