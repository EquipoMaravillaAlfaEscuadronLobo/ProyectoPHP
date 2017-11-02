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


                 for($i=1;$i<=$a;$i++){
                $titulo = $libro->getTitulo();
                $codigo=$libro->getCodigo_libro()."-".str_pad($i, 4,"0", STR_PAD_LEFT);
                $editorial = $libro->getEditoriales_codigo();
                $publicacion = $libro->getFecha_publicacion();
                $foto = $libro->getFoto();
                $estado = $libro->getEstado();

                $sql = 'INSERT INTO libros(codigo_libro,titulo,editoriales_codigo,fecha_publicacion,foto,estado)'
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
DISTINCT libros.titulo as titulo,
editoriales.nombre AS editorial,
libros.codigo_libro as codigo,
libros.foto as foto,
libros.editoriales_codigo as cedit,
libros.fecha_publicacion as fecha_publicacion,
CONCAT(autores.nombre,' ',autores.apellido)  AS autor

FROM
libros
INNER JOIN editoriales ON libros.editoriales_codigo = editoriales.codigo_editorial
INNER JOIN movimiento_autores ON movimiento_autores.codigo_libro = libros.codigo_libro
INNER JOIN autores ON movimiento_autores.codigo_autor = autores.codigo_autor where libros.estado=0
";
                $resultado=$conexion->query($sql);
            }catch(PDOException $ex){
print 'ERROR: ' . $ex->getMessage();

            }
            }
            return $resultado;
        }
	public static function BuscarLibro($conexion, $codigo)
    {
        $resultado="";
            if (isset($conexion)) {
                try{
                $sql="SELECT
libros.titulo,
libros.fecha_publicacion,
CONCAT(autores.nombre,' ',autores.apellido) as autor
FROM
libros
INNER JOIN movimiento_autores ON movimiento_autores.codigo_libro = libros.codigo_libro
INNER JOIN autores ON movimiento_autores.codigo_autor = autores.codigo_autor
WHERE
libros.codigo_libro ='$codigo'";

                $resultado=$conexion->query($sql);
            }catch(PDOException $ex){
print 'ERROR: ' . $ex->getMessage();

            }
            }
            return $resultado;
    }

    public static function BuscarUsuarios($conexion)
    {
        $resultado="";
            if (isset($conexion)) {
                try{
                $sql="SELECT * from usuarios";
                $resultado=$conexion->query($sql);
            }catch(PDOException $ex){
print 'ERROR: ' . $ex->getMessage();

            }
            }
            return $resultado;
    }

    public static function BuscarUsuario($conexion, $codigo)
    {
        $resultado="";
            if (isset($conexion)) {
                try{
                $sql="SELECT * from usuarios where codigo_usuario='$codigo'";
                $resultado=$conexion->query($sql);
            }catch(PDOException $ex){
print 'ERROR: ' . $ex->getMessage();

            }
            }
            return $resultado;
    }


    public static function EditarLibro($conexion, $libro)
    {
         $libro_mod = 0;
       if (isset($conexion)) {
            try {



                $titulo = $libro->getTitulo();
                $codigo= $libro->getCodigo_libro();
                $foto = $libro->getFoto();
                $publicacion = $libro->getFecha_publicacion();
                //$biografia = $libro->getBiografia();


                $sql = "UPDATE libros SET titulo='$titulo', foto='$foto', fecha_publicacion='$publicacion' where  codigo_libro='$codigo'";
                                ///estos son alias para que PDO pueda trabajar
                $sentencia = $conexion->prepare($sql);




                //$sentencia->bindParam(':titulo', $titulo, PDO::PARAM_STR);
                //$sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);
                //$sentencia->bindParam(':publicacion', $publicacion, PDO::PARAM_STR);
                //$sentencia->bindParam(':biografia', $biografia, PDO::PARAM_STR);
                //$sentencia->bindParam(':codigo', $codigo, PDO::PARAM_STR);


                $libro_mod = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $libro_mod;
    }

    public static function DarBaja($conexion, $codigo, $motivo)
    {
          $libro_mod = 0;
       if (isset($conexion)) {
            try {


                $sql = "UPDATE libros SET estado='1', motivo='$motivo' where  codigo_libro='$codigo'";
                                ///estos son alias para que PDO pueda trabajar
                $sentencia = $conexion->prepare($sql);




                //$sentencia->bindParam(':titulo', $titulo, PDO::PARAM_STR);
                //$sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);
                //$sentencia->bindParam(':publicacion', $publicacion, PDO::PARAM_STR);
                //$sentencia->bindParam(':biografia', $biografia, PDO::PARAM_STR);
                //$sentencia->bindParam(':codigo', $codigo, PDO::PARAM_STR);


                $libro_mod = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $libro_mod;
    }


}
 ?>
