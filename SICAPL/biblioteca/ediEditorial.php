<style>
    body{
        color: white !important;
    }
</style>
<?php
$titulo1="";
    include_once '../app/Conexion.php';
    include_once '../modelos/Editorial.php';
    include_once '../repositorios/repositorio_editorial.php';
      include_once '../plantillas/cabecera.php';
    include_once '../plantillas/pie_de_pagina.php';
    $nombre = $_POST["nombree_edit"];
    $telefono = $_POST["telefonoe_edit"];
    $correo = $_POST["email_edit"];
    $direccion =$_POST["direccion_edit"];
    $codigo=$_POST["codigoe_edit"];
    
    Conexion::abrir_conexion();

    $Editorial = new Editorial();
    $Editorial->setCodigo_editorial($codigo);
    $Editorial->setNombre($nombre);
    $Editorial->setTelefono($telefono);
    $Editorial->setEmail($correo);
    $Editorial->setDireccion($direccion);
    

    if (Repositorio_editorial::editarEditorial(Conexion::obtener_conexion(), $Editorial)) {
    echo "<script type='text/javascript'>";
    	echo "swal({
                    title: 'Exito',
                    text: 'Editorial Actualizada',
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
                    text: "Editorial no Actualizada",
                    type: "error"},
                    function(){
                       location.href="inicio_b.php";
                       
                     
                        
                    }

                    );';
//echo "alert('datos no atualizados')";
//echo "location.href='inicio_b.php'";
		echo "</script>";
    }
 //   Conexion::cerrar_conexion();


?>