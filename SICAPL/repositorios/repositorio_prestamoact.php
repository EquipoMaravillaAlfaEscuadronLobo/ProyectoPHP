<?php

/**
 * 
 */
class Repositorio_prestamoact {

    public static function ListaPrestamosAct($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT  (CONCAT(usuarios.nombre,' ',usuarios.apellido)) as nombre, 
                    prestamo_activos.codigo_pactivo as codigo, 
                    (prestamo_activos.fecha_salida),   
                    (movimiento_actvos.codigo_activo) as titulo, 
                    (prestamo_activos.fecha_devolucion) as Devolucion,
                    prestamo_activos.estado as estado
FROM usuarios 
                    INNER JOIN prestamo_activos ON prestamo_activos.usuarios_codigo= usuarios.codigo_usuario 
                    INNER JOIN movimiento_actvos ON movimiento_actvos.codigo_pactivo = prestamo_activos.codigo_pactivo 
                    INNER JOIN actvos ON movimiento_actvos.codigo_activo = actvos.codigo_activo
GROUP BY prestamo_activos.codigo_pactivo
ORDER BY
estado ASC,
Devolucion ASC
";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }

    public static function GuardarPrestamoAct($conexion, $prestamo) {
        $autor_insertado = false;
        if (isset($conexion)) {
            try {
                $usuario = $prestamo->getUsuario();
//echo $usuario;
                $salida = $prestamo->getSalida();
                $devolucion = $prestamo->getDevolucion();
                $sql = 'INSERT INTO prestamo_activos(usuarios_codigo,fecha_salida,fecha_devolucion,estado)'
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

    public static function GuardarActivos($conexion, $prestamo, $libro) {
        $autor_insertado = false;
        if (isset($conexion)) {
            try {



                //$usuario = $prestamo->getUsuario();
                // $salida = $prestamo->getSalida();
                //  $devolucion = $prestamo->getDevolucion();            



                $sql = 'INSERT INTO movimiento_actvos(codigo_activo,codigo_pactivo)'
                        . ' values (:libro,:prestamo)';
                 $sql1 = "UPDATE `actvos` SET `estado`='2' WHERE (`codigo_activo`='$libro') ";                
                $sentencia1 = $conexion->prepare($sql1);
                $sentencia1->execute();
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

    public static function obtenerUltimoPact($conexion) {
        $codigo = "";
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT codigo_pactivo from prestamo_activos order by codigo_pactivo desc limit 1";
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

    public static function Finalizar($conexion, $codigo, $motivo) {
        $libro_mod = 0;
        if (isset($conexion)) {
            try {


                $sql = "UPDATE prestamo_libros SET estado='1', observaciones='$motivo' where  codigo_plibro='$codigo'";                
                $sentencia = $conexion->prepare($sql);
                $libro_mod = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $libro_mod;
    }

    public static function obtenerPact($conexion, $codigoPact) {
        
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
categoria.nombre AS tipo,
(CONCAT(usuarios.nombre,' ',usuarios.apellido)) AS nombre,
usuarios.sexo AS sexo,
usuarios.foto AS foto,
usuarios.telefono AS tel,
usuarios.correo AS correo,
usuarios.direccion AS dir,
prestamo_activos.fecha_salida AS fech_sal,
prestamo_activos.fecha_devolucion AS fech_dev,
movimiento_actvos.codigo_pactivo AS mov_activos,
prestamo_activos.usuarios_codigo as carnet
FROM
prestamo_activos
INNER JOIN movimiento_actvos ON movimiento_actvos.codigo_pactivo = prestamo_activos.codigo_pactivo
INNER JOIN actvos ON actvos.codigo_activo = movimiento_actvos.codigo_activo
INNER JOIN categoria ON actvos.codigo_tipo = categoria.codigo_tipo
INNER JOIN usuarios ON prestamo_activos.usuarios_codigo = usuarios.codigo_usuario
WHERE
prestamo_activos.codigo_pactivo = '$codigoPact'
GROUP BY
prestamo_activos.codigo_pactivo

                        ";
                 $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }
    
      public static function obtenerListActP($conexion, $codigoP) {
        
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
                    movimiento_actvos.codigo_activo as codigo,
categoria.nombre as tipo
FROM
movimiento_actvos
INNER JOIN actvos ON movimiento_actvos.codigo_activo = actvos.codigo_activo
INNER JOIN categoria ON actvos.codigo_tipo = categoria.codigo_tipo
WHERE
movimiento_actvos.codigo_pactivo = '$codigoP'
ORDER BY
codigo ASC
                        ";
                 $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
       
        return $resultado;
    }
}

?>