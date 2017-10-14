<?php
/**
* 
*/
class Repositorio_editorial
{
	
	public static function insertarEditorial($conexion, $editorial){
			 $editorial_insertada = false;
       if (isset($conexion)) {
            try {
                
               
                 
                $nombre = $editorial->getNombre();

                $direccion = $editorial->getdireccion();
                $email = $editorial->getemail();            
                $telefono = $editorial->gettelefono();
                
                
                $sql = 'INSERT INTO editoriales(nombre,direccion,email,telefono)'
                        . ' values (:nombre,:direccion,:email,:telefono)';
                                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                
                
                
                
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                                             
                
                $editorial_insertada = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $editorial_insertada;
		}

		public function ObtenerUltimo($conexion)
		{
			$ultimo=1;
			if (isset($conexion)) {
				try {
				$sql="SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'diseno1' AND TABLE_NAME = 'editoriales'";

				 foreach ($conexion->query($sql) as $row) {	
				 	$ultimo=$row[0];
				 }
				} catch (PDOException $ex) {
					print 'ERROR: ' . $ex->getMessage();
				}
			}
			return $ultimo;
		}


		public function ListaEditorial($conexion)
		{
			$resultado="";
			if (isset($conexion)) {
				try{
				$sql="Select * from editoriales";
				$resultado=$conexion->query($sql);
			}catch(PDOException $ex){
print 'ERROR: ' . $ex->getMessage();

			}
			}
			return $resultado;
		}

		public static function editarEditorial($conexion, $editorial){
			 $editorial_insertada = false;
       if (isset($conexion)) {
            try {
                
               
                 
                $nombre = $editorial->getNombre();
                $codigo=$editorial->getCodigo_editorial();
                $direccion = $editorial->getDireccion();
                $email = $editorial->getEmail();            
                $telefono = $editorial->getTelefono();
                
                
                $sql = 'UPDATE editoriales SET nombre=:nombre, email=:email, telefono=:telefono, direccion=:direccion where codigo_editorial=:codigo';
                        
                                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                
                
                
                $sentencia->bindParam(':codigo', $codigo, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo', $codigo, PDO::PARAM_STR);
                                             
                
                $editorial_insertada = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $editorial_insertada;
		}
	
}
?>