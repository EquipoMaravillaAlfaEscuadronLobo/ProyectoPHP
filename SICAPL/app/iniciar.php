<?php
	session_start();
	$codigo=$_POST["user"];
	$pass=$_POST["clave"];

	include_once 'Conexion.php';
	include_once '../modelos/Administrador.inc.php';
	include_once '../repositorios/repositorio_administrador.inc.php';
	 Conexion::abrir_conexion();


	 $administrador=Repositorio_administrador::obtener_administrador(Conexion::obtener_conexion(), $codigo);
	 if (isset($administrador)&&$administrador->getPasword()==$pass) {
	 	$_SESSION['user']=$administrador->getCodigo_administrador();
	 	$_SESSION['nivel']=$administrador->getNivel();
	 	echo "ENCONTRADO";
	 }
	 else{
	 	echo "INEXISTENTE";
	 }




?>