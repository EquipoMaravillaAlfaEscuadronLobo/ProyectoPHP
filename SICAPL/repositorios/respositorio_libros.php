<?php 
/**
* 
*/
class Repositorio_libros
{
	public static function insertarLibros($conexion, $libro, $a, $autores)
	{
		$libro_insertado = false;
       if (isset($conexion)) {
            try {
                
               
                 for($i=0;$i<$a;$i++){
                $titulo = $libro->getTitulo();
                $codigo=$libro->getCodigo_libro()."-".str_pad($i, 4,"0", STR_PAD_LEFT);
                $editorial = $libro->getEditoriales_codigo();
                $publicacion = $libro->getFecha_publicacion();            
                $foto = $libro->getFoto();
                $estado = $libro->getEstado();
                
                $sql = 'INSERT INTO libros(codigo_libro,titulo,codigo_editorial,fecha_publicacion,foto,estado)'
                        . ' values (:codigo,:titulo,:editorial,:publicacion,:foto, :estado)';
                                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':titulo', $titulo, PDO::PARAM_STR);
                $sentencia->bindParam(':editorial', $editorial, PDO::PARAM_STR);
                $sentencia->bindParam(':publicacion', $publicacion, PDO::PARAM_STR);
                $sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo', $codigo, PDO::PARAM_STR);
                                             
                
                $libro_insertado = $sentencia->execute();
               for ($j=0; $j <count($autores) ; $j++) { 
					$codAutor=$autores[$j];
					$sql ="INSERT into movimiento_autores (codigo_libro, codigo_autor) values('$codigo', '$codAutor')";
				$sentencia=$conexion->prepare($sql);
				$sentencia->execute();
				}
            }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $libro_insertado;
	}
	public function ListaLibros($conexion)
        {
            $resultado="";
            if (isset($conexion)) {
                try{
                $sql="SELECT 
libros.titulo as titulo,
editoriales.nombre AS editorial,
autores.nombre AS autor,
COUNT(DISTINCT libros.titulo) as cantidad
FROM
libros
INNER JOIN editoriales ON libros.codigo_editorial = editoriales.codigo_editorial
INNER JOIN movimiento_autores ON movimiento_autores.codigo_libro = libros.codigo_libro
INNER JOIN autores ON movimiento_autores.codigo_autor = autores.codigo_autor
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