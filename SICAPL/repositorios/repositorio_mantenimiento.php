<?php

/**
 * 
 */
class Repositorio_mantenimiento {

    public static function ListaMantAct($conexion) {
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

    public static function GuardarMantAct($conexion, $mant) {
        $autor_insertado = false;
        if (isset($conexion)) {
            try {
                $fecha=$mant->getFecha();
                $desc=$mant->getDescripcion();
                $costo=$mant->getCosto();
                $sql = 'INSERT INTO mantenimientos ( fecha, descripcion, costo)'
                        .' VALUES (:fecha,:desc,:costo)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':desc', $desc, PDO::PARAM_STR);
                $sentencia->bindParam(':costo', $costo, PDO::PARAM_STR);
                $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);



                $autor_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $autor_insertado;
    }

    public static function GuardarActivos($conexion, $codAct, $codMant) {
        $autor_insertado = false;
        if (isset($conexion)) {
            try {
                $sql = 'INSERT INTO movimiento_actvos_mant(codigo_activo, codigo_mantenimiento)'
                        . ' values (:codAct,:codMant)';
               
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':codAct', $codAct, PDO::PARAM_STR);
                $sentencia->bindParam(':codMant', $codMant, PDO::PARAM_STR);
                $autor_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $autor_insertado;
    }
    
     public static function GuardarEncargados($conexion, $codAct, $codMant) {
        $autor_insertado = false;
        if (isset($conexion)) {
            try {
                $sql = 'INSERT INTO movimiento_mantenimientos(codigo_emantenimiento, codigo_mantenimiento)'
                        . ' values (:codAct,:codMant)';
               
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':codAct', $codAct, PDO::PARAM_STR);
                $sentencia->bindParam(':codMant', $codMant, PDO::PARAM_STR);
                $autor_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $autor_insertado;
    }

    public static function obtenerUltimoMant($conexion) {
        $codigo = "";
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT codigo_mantenimiento from mantenimientos order by codigo_mantenimiento desc limit 1";
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
movimiento_actvos.codigo_activo AS codigo,
categoria.nombre AS tipo,
actvos.estado as estado
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