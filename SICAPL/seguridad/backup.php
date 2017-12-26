+<!--<a href="./Backup.php">Realizar copia de seguridad</a>-->
<a style="color:  red" href="../repositorios/repositorio_Backup.php">Realizar copia de seguridad</a>
	<!--<form action="./Restore.php" method="POST">-->
        <form action="../repositorios/repositorio_Restore.php" method="POST">
            <label style="color:  #000">Selecciona un punto de restauración</label><br>
		<select name="restorePoint">
			<option value="" disabled="" selected="">Selecciona un punto de restauración</option>
			<?php
				//include_once './Connet.php';
                                include '../repositorios/repositorio_Connet.php';
				$ruta=BACKUP_PATH;
				if(is_dir($ruta)){
				    if($aux=opendir($ruta)){
				        while(($archivo = readdir($aux)) !== false){
				            if($archivo!="."&&$archivo!=".."){
				                $nombrearchivo=str_replace(".sql", "", $archivo);
				                $nombrearchivo=str_replace("-", ":", $nombrearchivo);
				                $ruta_completa=$ruta.$archivo;
				                if(is_dir($ruta_completa)){
				                }else{
				                    echo '<option value="'.$ruta_completa.'">'.$nombrearchivo.'</option>';
				                }
				            }
				        }
				        closedir($aux);
				    }
				}else{
				    echo $ruta." No es ruta válida";
				}
			?>
		</select>
		<button type="submit" >Restaurar</button>
	</form>