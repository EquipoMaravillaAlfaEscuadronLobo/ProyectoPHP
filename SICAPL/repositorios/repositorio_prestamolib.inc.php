<?php 
	/**
	* 
	*/
	class Repositorio_prestamolib
	{
		public static function ListaPrestamos($conexion)
		{
			$resultado="";
			if (isset($conexion)) {
				try{
				$sql="SELECT
prestamo_libros.codigo_plibro as codigo,
libros.titulo as titulo,
usuarios.nombre as nombre,
usuarios.apellido as apellido,
prestamo_libros.fecha_salida as salida,
prestamo_libros.fecha_devolucion as devolucion
FROM
prestamo_libros
INNER JOIN usuarios ON prestamo_libros.codigo_usuario = usuarios.codigo_usuario
INNER JOIN movimiento_libros ON movimiento_libros.codigo_plibro = prestamo_libros.codigo_plibro
INNER JOIN libros ON movimiento_libros.codigo_libro = libros.codigo_libro
";
				$resultado=$conexion->query($sql);
			}catch(PDOException $ex){
print 'ERROR: ' . $ex->getMessage();

			}
			}
			return $resultado;
		}


		public static function GuardarPrestamo($conexion, $prestamo)
		{
			 $autor_insertado = false;
       if (isset($conexion)) {
            try {
                
               
                 
                $usuario = $prestamo->getUsuario();
//echo $usuario;
                $salida = $prestamo->getSalida();
                $devolucion = $prestamo->getDevolucion();            
                
                
                
                $sql = 'INSERT INTO prestamo_libros(codigo_usuario,fecha_devolucion,fecha_salida)'
                        . ' values (:usuario,:salida,:devolucion)';
                                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                
                
                
                
                $sentencia->bindParam(':usuario', $usuario, PDO::PARAM_STR);
                $sentencia->bindParam(':salida', $salida, PDO::PARAM_STR);
                $sentencia->bindParam(':devolucion', $devolucion, PDO::PARAM_STR);
              
                                             
                
                $autor_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $autor_insertado;
		}

		public static function GuardarLibros($conexion, $prestamo, $libro)
		{
			 $autor_insertado = false;
       if (isset($conexion)) {
            try {
                
               
                 
               //$usuario = $prestamo->getUsuario();

               // $salida = $prestamo->getSalida();
              //  $devolucion = $prestamo->getDevolucion();            
                
                
                
                $sql = 'INSERT INTO movimiento_libros(codigo_libro,codigo_plibro)'
                        . ' values (:libro,:prestamo)';
                                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                
                
                
                
                $sentencia->bindParam(':libro', $libro, PDO::PARAM_STR);
                $sentencia->bindParam(':prestamo', $prestamo, PDO::PARAM_STR);
                //$sentencia->bindParam(':nacimiento', $nacimiento, PDO::PARAM_STR);
               // $sentencia->bindParam(':biografia', $biografia, PDO::PARAM_STR);
                                             
                
                $autor_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $autor_insertado;
		}

		public static function obtenerUltimo($conexion)
		{
			$codigo="";
			$resultado="";
			if (isset($conexion)) {
				try{
				$sql="SELECT codigo_plibro from prestamo_libros order by codigo_plibro desc limit 1";
				$resultado=$conexion->query($sql);
			}catch(PDOException $ex){
print 'ERROR: ' . $ex->getMessage();

			}
			foreach ($resultado as $fila) {
				$codigo=$fila[0];
			}
			}
			return $codigo;
		}
	}
 ?>