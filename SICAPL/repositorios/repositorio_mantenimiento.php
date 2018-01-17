<?php

/**
 * 
 */
class Repositorio_mantenimiento {

    public static function ListaMantAct($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
mantenimientos.fecha as fecha,
mantenimientos.descripcion as des,
mantenimientos.costo as costo,
mantenimientos.codigo_mantenimiento as cod
FROM
mantenimientos
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
    
     public static function ListarEncargados($conexion,$codMant) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
movimiento_mantenimientos.codigo_emantenimiento as codMant
FROM
movimiento_mantenimientos
WHERE
movimiento_mantenimientos.codigo_mantenimiento = '$codMant'";
                 $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
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

    

    public static function obtenerActivos($conexion, $codigoMant) {

        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
actvos.codigo_activo as cod,
categoria.nombre as tipo
FROM
actvos
INNER JOIN categoria ON actvos.codigo_tipo = categoria.codigo_tipo
INNER JOIN movimiento_actvos_mant ON movimiento_actvos_mant.codigo_activo = actvos.codigo_activo
WHERE
movimiento_actvos_mant.codigo_mantenimiento = '$codigoMant'
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
      public static function insertar_bitacora($conexion, $accion) {
        $administrador_insertado = false;
        if (isset($conexion)) {
            try {
                $administrador = $_SESSION['user'];
                ini_set('date.timezone', 'America/El_Salvador');
                $hora = date("Y/m/d ") . date("h:i:s");

                $sql = "INSERT INTO bitacora (codigo_administrador, accion, fecha) VALUES ('$administrador', '$accion', '$hora');";

                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $administrador_insertado = $sentencia->execute();

//                echo 'la bitacora ha sido guardada';
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

}

?>