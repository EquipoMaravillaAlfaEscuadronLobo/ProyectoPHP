<?php

/**
 * 
 */
class Repositorio_prestamolib {
    //retorna una lista de los prestamos pendientes
    public static function ListaPrestamos($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
                                    usuarios.codigo_usuario as user,
                                    (CONCAT(usuarios.nombre,' ',usuarios.apellido)) as nombre,
                                    prestamo_libros.codigo_plibro as codigo,
                                    (prestamo_libros.fecha_salida),
 (prestamo_libros.fecha_devolucion) as Devolucion,
 libros.codigo_libro as cl,
 GROUP_CONCAT(libros.titulo SEPARATOR ' - ') as titulo,
 usuarios.telefono as telefono,
 usuarios.correo as correo,
(Select COUNT(DISTINCT libros.codigo_libro)) as cantidad
FROM
usuarios
INNER JOIN prestamo_libros ON prestamo_libros.codigo_usuario = usuarios.codigo_usuario
INNER JOIN movimiento_libros ON movimiento_libros.codigo_plibro = prestamo_libros.codigo_plibro
INNER JOIN libros ON movimiento_libros.codigo_libro = libros.codigo_libro
WHERE
prestamo_libros.estado = 0 and libros.estado=2
GROUP BY movimiento_libros.codigo_plibro
";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }
    //retorna los libros incluidos en un prestamo
    public static function ListaLibrosPrestamo($conexion, $codigo) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
                                    
 
 prestamo_libros.codigo_plibro as codigo,
 (prestamo_libros.fecha_salida),
 (prestamo_libros.fecha_devolucion) as Devolucion,
 libros.codigo_libro as cl,
 libros.titulo as titulo
FROM
usuarios
INNER JOIN prestamo_libros ON prestamo_libros.codigo_usuario = usuarios.codigo_usuario
INNER JOIN movimiento_libros ON movimiento_libros.codigo_plibro = prestamo_libros.codigo_plibro
INNER JOIN libros ON movimiento_libros.codigo_libro = libros.codigo_libro
WHERE
prestamo_libros.estado = 0 and libros.estado=2 and prestamo_libros.codigo_plibro='$codigo'

";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }
    //registra los prestamos en la base de datos
    public static function GuardarPrestamo($conexion, $prestamo) {
        $autor_insertado = false;
        if (isset($conexion)) {
            try {



                $usuario = $prestamo->getUsuario();
//echo $usuario;
                $salida = $prestamo->getSalida();
                $devolucion = $prestamo->getDevolucion();



                $sql = 'INSERT INTO prestamo_libros(codigo_usuario,fecha_salida,fecha_devolucion,estado)'
                        . ' values (:usuario,CURDATE(),:devolucion,"0")';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);




                $sentencia->bindParam(':usuario', $usuario, PDO::PARAM_STR);
                //  $sentencia->bindParam(':salida', $salida, PDO::PARAM_STR);
                $sentencia->bindParam(':devolucion', $devolucion, PDO::PARAM_STR);



                $autor_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $autor_insertado;
    }
    //registra los libros incluidos en el prestamo, en una tabla de movimiento
    public static function GuardarLibros($conexion, $prestamo, $libro) {
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
    //obtiene el ultimo prestamo registrado
    public static function obtenerUltimo($conexion) {
        $codigo = "";
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT codigo_plibro from prestamo_libros order by codigo_plibro desc limit 1";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
            foreach ($resultado as $fila) {
                $codigo = $fila[0];
            }
        }
        return $codigo;
    }
    //finaliza un prestamo
    public static function Finalizar($conexion, $codigo, $motivo) {
        $libro_mod = 0;
        if (isset($conexion)) {
            try {


                $sql = "UPDATE prestamo_libros SET estado='1', observaciones='$motivo' where  codigo_plibro='$codigo'";
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
    //actualiza la fecha de devolucion de un prestamo
    public static function Actualizar($conexion, $codigo, $fecha) {
        $libro_mod = 0;
        if (isset($conexion)) {
            try {


                $sql = "UPDATE prestamo_libros SET fecha_devolucion='$fecha' where  codigo_plibro='$codigo'";
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
    //cambia el estado de los libros incluidos en un prestamo
    public static function cambiarEstado($conexion, $codigo_libro, $estado) {
        $libro_mod = 0;
        if (isset($conexion)) {
            try {


                $sql = "UPDATE libros SET estado='$estado' where  codigo_libro='$codigo_libro'";
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