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
	}
 ?>