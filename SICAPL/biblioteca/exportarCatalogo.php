<?php
include_once("../app/config.inc.php");
include_once ("../app/Conexion.php");


	$ruta = "";
	

	
            
            Conexion::abrir_conexion();
		$fecha = date("h-m-s_d-m-Y");
		$ruta = "./catalogo/{$fecha}_{$nombre_base_datos}.sql";
		if(is_writable("./catalogo"))
		{
			if(file_exists($ruta))
			{
				unlink($ruta);
			}
			else
			{
				$comando = "mysqldump -u $nombre_usuario -h $nombre_servidor -p $nombre_base_datos editoriales > $ruta";
				system($comando);
			}
		}
		
	

	
