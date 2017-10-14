<?php 
	include_once '../app/Conexion.php';
	include_once '../modelos/Prestamo.inc.php';
	include_once '../repositorios/repositorio_prestamolib.inc.php';

	include_once '../plantillas/cabecera.php';
    include_once '../plantillas/pie_de_pagina.php';
	Conexion::abrir_conexion();

	$usuario=$_POST['codigouser'];
	$salida=$_POST['fecha_salida'];
	$devolucion=$_POST['fecha_devolucion'];
	$libros=$_POST['num'];
//echo $usuario;
	$Prestamo= new PrestamoLibro();
	$Prestamo->setUsuario($usuario);
	$Prestamo->setSalida($salida);
	$Prestamo->setDevolucion($devolucion);

	if(Repositorio_prestamolib::GuardarPrestamo(Conexion::obtener_conexion(), $Prestamo)){
	//	echo "hasta aki";
		$prestamo1=Repositorio_prestamolib::obtenerUltimo(Conexion::obtener_conexion());
	//echo $prestamo1;
		for ($i=1; $i <= $libros; $i++) { 
			if (!Repositorio_prestamolib::GuardarLibros(Conexion::obtener_conexion(),$prestamo1,$_POST['codigol'.$i])) {
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
			}
		}
		 echo "<script type='text/javascript'>";
    	echo "swal({
                    title: 'Exito',
                    text: 'Prestamo Registrado',
                    type: 'success'},
                    function(){
                       location.href='inicio_b.php';
                       
                     
                        
                    }

                    );";
		//echo "alert('datos actualizados')";
		//echo "location.href='inicio_b.php'";
		echo "</script>";
	}
 ?>