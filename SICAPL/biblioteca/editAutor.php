<?php

    include_once '../app/Conexion.php';
    include_once '../modelos/Autores.php';
    include_once '../repositorios/repositorio_autores.inc.php';
    include_once '../plantillas/cabecera.php';
    include_once '../plantillas/pie_de_pagina.php';
    $ruta="../biografias/";
    $nombre = $_POST["nombrea_edit"];
    $apellido = $_POST["apellidoa_edit"];
    $nacimiento = $_POST["apellidoa_edit"];
    $biografia =$ruta.$_FILES["bio_edit"]["name"];
    $biografia2 =$_FILES["bio_edit"]["name"];
    $codigo=$_POST['codigoa_edit'];
    Conexion::abrir_conexion();

    $Autor = new Autores();
    $Autor->setCodigo($codigo);
    $Autor->setNombre($nombre);
    $Autor->setApellido($apellido);
   echo $codigo;
    $Autor->setNacimiento($nacimiento);
  //  echo "hasta aki";
    if (move_uploaded_file($_FILES['bio_edit']['tmp_name'], $biografia)) {
       $Autor->setBiografia($biografia2);
       
    }else{
        $Autor->setBiografia("");
       // echo "hasta";
}
	
    //echo Repositorio_autores::editarAutor(Conexion::obtener_conexion(), $Autor);
    if (Repositorio_autores::editarAutor(Conexion::obtener_conexion(), $Autor)==1) {
    	//echo "hasta aki";
    	echo "<script type='text/javascript'>";
    	echo "swal({
                    title: 'Exito',
                    text: 'Autor Actualizado',
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
                    text: "Autor no Actualizado",
                    type: "error"},
                    function(){
                       location.href="inicio_b.php";
                       
                     
                        
                    }

                    );';
//echo "alert('datos no atualizados')";
//echo "location.href='inicio_b.php'";
		echo "</script>";
    }
   // Conexion::cerrar_conexion();

?>