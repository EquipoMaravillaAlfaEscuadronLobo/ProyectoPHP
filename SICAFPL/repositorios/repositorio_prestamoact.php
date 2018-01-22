<?php

/**
 * 
 */
class Repositorio_prestamoact {

    public static function ListaPrestamosAct($conexion) {// no la pongas quw no recuerdo para qeu esta
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT  (CONCAT(usuarios.nombre,' ',usuarios.apellido)) as nombre, 
                    prestamo_activos.codigo_pactivo as codigo, 
                    (prestamo_activos.fecha_salida),   
                    (movimiento_actvos.codigo_activo) as titulo, 
                    (prestamo_activos.fecha_devolucion) as Devolucion,
                    prestamo_activos.estado as estado,
                    usuarios.codigo_usuario as carnet,
                    usuarios.telefono as telefono,
                    usuarios.correo as correo
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
    //devuelve una lista de los prestamos de activos registrados ordenada segun al fecha de devolucion vencida
      public static function ListaActPrestamos($conexion) {

        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
actvos.codigo_activo AS codigo,
prestamo_activos.fecha_salida AS fechSal,
prestamo_activos.fecha_devolucion AS fechaDev,
prestamo_activos.estado AS estado,
usuarios.codigo_institucion,
(CONCAT(usuarios.nombre,' ',usuarios.apellido)) AS nombre,
prestamo_activos.codigo_pactivo as codPac,
categoria.nombre as tipo
FROM
actvos
INNER JOIN movimiento_actvos ON movimiento_actvos.codigo_activo = actvos.codigo_activo
INNER JOIN prestamo_activos ON movimiento_actvos.codigo_pactivo = prestamo_activos.codigo_pactivo
INNER JOIN categoria ON actvos.codigo_tipo = categoria.codigo_tipo
INNER JOIN usuarios ON prestamo_activos.usuarios_codigo = usuarios.codigo_usuario
WHERE
actvos.estado = 2
ORDER BY
estado ASC,
fechaDev ASC
";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }
    //guarda prestamode activo en la base de datos
    public static function GuardarPrestamoAct($conexion, $prestamo) {
        $autor_insertado = false;
        if (isset($conexion)) {
            try {
                $usuario = $prestamo->getUsuario();
                $salida = $prestamo->getSalida();
                $devolucion = $prestamo->getDevolucion();
                $sql = 'INSERT INTO prestamo_activos(usuarios_codigo,fecha_salida,fecha_devolucion,estado)'
                        . ' values (:usuario,CURDATE(),:devolucion,"0")';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':usuario', $usuario, PDO::PARAM_STR);
                $sentencia->bindParam(':devolucion', $devolucion, PDO::PARAM_STR);

                $autor_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $autor_insertado;
    }
    //guarda activos de un prestamo en la tabla de movimiento
    public static function GuardarActivos($conexion, $prestamo, $libro) {
        
        $autor_insertado = false;
        if (isset($conexion)) {
            try {

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
    //recuperamos el ultipo codigo de prestamo registrado
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
    //actualiza los datos del prestamo y queda finalizado
    public static function Finalizar($conexion, $codigo, $motivo) {
        $libro_mod = 0;
        if (isset($conexion)) {
            try {


                $sql = "UPDATE prestamo_activos SET estado='1', observacion='$motivo' where  codigo_pactivo='$codigo'";
                $sentencia = $conexion->prepare($sql);
                $libro_mod = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $libro_mod;
    }
    //actualiza datos de prestamo fecha y obseraciones
    public static function Actualizar($conexion, $fecha, $observaciones, $cod) {
        $libro_mod = 0;
        if (isset($conexion)) {
            try {
                $sql = "UPDATE `prestamo_activos` SET `observacion`='$observaciones', `fecha_devolucion`='$fecha' WHERE (`codigo_pactivo`='$cod') ";
                $sentencia = $conexion->prepare($sql);
                $libro_mod = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $libro_mod;
    }
    //actualiza el estdo de un activo qeu estaba en prestamo
    public static function ActualizarActivo($conexion, $cod, $estado, $observacion) {
        
        $libro_mod = 0;
        if (isset($conexion)) {
            try {
                //para no borrar las observaciones acteriores
                $sql = "SELECT
                actvos.observacion
                FROM
                actvos
                WHERE
                actvos.codigo_activo = '$cod'";
                $resultado = $conexion->query($sql);
                foreach ($resultado as $fila) {
                    $observacion = $fila[0] . " \n " .$observacion ;
                }
                //****
                
                $sql = "UPDATE `actvos` SET `estado`='$estado', `observacion`='$observacion' WHERE (`codigo_activo`='$cod') ";
                $sentencia = $conexion->prepare($sql);
                $libro_mod = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $libro_mod;
    }
    //obtenemos los datos de un prestamo de activo
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
    //obtenemos la lista de codigos de activos de un prestamo
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
                        codigo ASC";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }

        return $resultado;
    }

}

?>