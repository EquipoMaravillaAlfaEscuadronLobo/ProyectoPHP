<?php

class Repositorio_activo {

    public static function insertar_activo($conexion, $activo) {
        $activo_insertado = false;
        //$activo = new Activo(); se utilizo para las sugerencias de netbeasn
        if (isset($conexion)) {
            try {

                $codigo_activo = $activo->getCodigo_activo();
                $codigo_tipo = $activo->getCodigo_tipo();
                $codigo_proveedor = $activo->getCodigo_proveedor();
                $codigo_detalle = $activo->getCodigo_detalle();
                $codigo_administrador = $activo->getCodigo_administrador();
                $estado = $activo->getEstado();
                $observacion = $activo->getObservacion();
                $foto = $activo->getFoto();
                $fecha = $activo->getFecha_adquicision();
                $precio = $activo->getPrecio();
                //$activoExistente = self::obtener_activo($conexion, $codigo_administrador);
                //if ($administradorExistente->getCodigo_administrador() == "") {

                $sql = 'INSERT INTO actvos(codigo_activo,codigo_tipo, codigo_proveedor, codigo_detalle, codigo_administrador, fecha_adquicision, precio, estado, foto, observacion )'
                        . ' values (:codigo_activo,:codigo_tipo, :codigo_proveedor , :codigo_detalle, :codigo_administrador, :fecha, :precio, :estado, :foto , :observacion )';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':codigo_activo', $codigo_activo, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo_tipo', $codigo_tipo, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo_proveedor', $codigo_proveedor, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo_detalle', $codigo_detalle, PDO::PARAM_INT);
                $sentencia->bindParam(':codigo_administrador', $codigo_administrador, PDO::PARAM_INT);
                $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);
                $sentencia->bindParam(':precio', $precio, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                $sentencia->bindParam(':observacion', $estado, PDO::PARAM_STR);
                $sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);

                $activo_insertado = $sentencia->execute();

                //$accion = "se registro un activo con las siguientes  caracteristicas: tipo" $ ;
                
                /* } else {
                  echo '<script>'
                  . 'swal("Advetencia!", "El nombre de usuario que introdujo ya esta en uso, favor introdusca otro", "warning");'
                  . '$("#idNombre").val("' . $nombre . '"); $("#idApellido").val("' . $apellido . '");'
                  . '$("#idUser").val("' . $codigo_administrador . '"); $("#idDui").val("' . $dui . '");'
                  . '$("#idFecha").val("' . $fecha . '"); $("#idEmail").val("' . $email . '");'
                  . 'if ("' . $nivel . '" == "0") {$("#idRoot").attr("checked", "checked");} else {$("#idAdministrador").attr("checked", "checked");}'
                  . 'if ("' . $sexo . '" == "Masculino") {$("#idHombre").attr("checked", "checked");} else {$("#idMujer").attr("checked", "checked");}'
                  . '</script>';
                  } */
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro acivo", "Favor revisar los datos e intentar nuevamente' . $ex->getMessage() . '", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function lista_activo($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from actvos  ORDER BY actvos.codigo_activo ASC";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }

    public static function lista_activo2($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from actvos where estado='1' ORDER BY actvos.codigo_activo ASC";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }
    
    public static function lista_activo_mantenimiento($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from actvos where actvos.estado = 1 or actvos.estado = 3  ORDER BY actvos.codigo_activo ASC";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }
    
     public static function lista_activo_mantenimiento2($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from actvos where actvos.estado = 3  ORDER BY actvos.codigo_activo ASC";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }

    public static function lista_activo3($conexion, $cant) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
                    actvos.codigo_activo
                    FROM
                    actvos
                    WHERE
                    actvos.estado = 1

                    LIMIT '$cant'";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }

    public static function actualizar_activo($conexion, $activo, $codigo_original) {
        $activo_insertado = false;
        // $administrador = new Administrador();

        if (isset($conexion)) {
            try {

                $codigo_administrador = $activo->getCodigo_administrador();
                $foto = $activo->getFoto();
                $sql = "UPDATE  actvos set codigo_administrador=:codigo_administrador,foto = :foto where codigo_activo='$codigo_original'";

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':codigo_administrador', $codigo_administrador, PDO::PARAM_INT);
                $sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);
                $activo_insertado = $sentencia->execute();
                
                $accion = "se  actualizaron los datos del activo " . $codigo_original;
                self::insertar_bitacora($conexion, $accion);
                
            } catch (PDOException $ex) {
                echo "<script>swal('Excelente!', 'hubo pedo '$sql' ', 'success');</script>";

                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function obtener_activo($conexion, $codigo) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from actvos  where codigo_activo='$codigo'";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }

    public static function obtener_nactivo($conexion, $cod) {

        if (isset($conexion)) {
            try {

                $sql = "SELECT
                        COUNT( actvos.codigo_tipo)
                        FROM
                        actvos
                        WHERE
                        actvos.codigo_tipo = '$cod'"; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                    $r = $row[0];
                }
                return $r;
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
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