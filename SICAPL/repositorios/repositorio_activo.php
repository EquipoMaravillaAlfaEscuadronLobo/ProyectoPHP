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
                $precio =  $activo->getPrecio();
                //$activoExistente = self::obtener_activo($conexion, $codigo_administrador);
                //if ($administradorExistente->getCodigo_administrador() == "") {

                    $sql = 'INSERT INTO actvos(codigo_activo,codigo_tipo, codigo_proveedor, codigo_detalle, codigo_administrador, fecha_adquicision, precio, estado, foto, observacion )'
                            . ' values (:codigo_activo,:codigo_tipo, :codigo_proveedor , :codigo_detalle, :codigo_administrador, :fecha, :precio, :estado, :foto , :observacion )';
                    ///estos son alias para que PDO pueda trabajar 
                    $sentencia = $conexion->prepare($sql);

                    $sentencia->bindParam(':codigo_activo', $codigo_activo , PDO::PARAM_STR);
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

                    
               /* } else {
                    echo '<script>'
                    . 'swal("Advetencia!", "El nombre de usuario que introdujo ya esta en uso, favor introdusca otro", "warning");'
                    . '$("#idNombre").val("' . $nombre . '"); $("#idApellido").val("' . $apellido . '");'
                    . '$("#idUser").val("' . $codigo_administrador . '"); $("#idDui").val("' . $dui . '");'
                    . '$("#idFecha").val("' . $fecha . '"); $("#idEmail").val("' . $email . '");'
                    . 'if ("' . $nivel . '" == "0") {$("#idRoot").attr("checked", "checked");} else {$("#idAdministrador").attr("checked", "checked");}'
                    . 'if ("' . $sexo . '" == "Masculino") {$("#idHombre").attr("checked", "checked");} else {$("#idMujer").attr("checked", "checked");}'
                    . '</script>';
                }*/
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro acivo", "Favor revisar los datos e intentar nuevamente'.$ex->getMessage().'", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function obtener_administrador($conexion) {
        $administrador = new Administrador();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM administradores WHERE codigo_administrador='$codigo_administrador' or email='$codigo_administrador'"; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                    $administrador->setCodigo_administrador($row["codigo_administrador"]);
                    $administrador->setPasword($row["pasword"]);
                    $administrador->setNivel($row["nivel"]);
                    $administrador->setEmail($row["email"]);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $administrador;
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

    public static function actualizar_administrador($conexion, $administrador, $codigo_original) {
        $administrador_insertado = false;
        // $administrador = new Administrador();

        if (isset($conexion)) {
            try {

                $codigo_administrador = $administrador->getCodigo_administrador();
                $pasword = $administrador->getPasword();
                $nivel = $administrador->getNivel();
                $nombre = $administrador->getNombre();
                $apellido = $administrador->getApellido();
                $sexo = $administrador->getSexo();
                $dui = $administrador->getDui();
                $observacion = $administrador->getObservacion();
                $foto = $administrador->getFoto();
                $email = $administrador->getEmail();
                $fecha = $administrador->getFecha();

                if ($codigo_administrador == $codigo_original) {
                    $sql = 'UPDATE administradores SET nombre=:nombre, apellido=:apellido,pasword=:pasword,dui=:dui,nivel=:nivel, fecha=:fecha,email=:email,sexo=:sexo  WHERE codigo_administrador = :codigo_original';

                    $sentencia = $conexion->prepare($sql);
                    $sentencia->bindParam(':codigo_original', $codigo_original, PDO::PARAM_STR);
                    $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                    $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                    $sentencia->bindParam(':pasword', $pasword, PDO::PARAM_STR);
                    $sentencia->bindParam(':dui', $dui, PDO::PARAM_STR);
                    $sentencia->bindParam(':nivel', $nivel, PDO::PARAM_STR);
                    $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);
                    $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                    $sentencia->bindParam(':sexo', $sexo, PDO::PARAM_STR);

                    $administrador_insertado = $sentencia->execute();

                    echo '<script>swal("Excelente!", "Registro actualizado con exito", "success");</script>';
                    echo '<script>location.href="inicio_seguridad.php";</script>';
                } else {
                    echo "<script>swal('Excelente!', 'hubo pedo '$sql' ', 'success');</script>";
                }
            } catch (PDOException $ex) {
                echo "<script>swal('Excelente!', 'hubo pedo '$sql' ', 'success');</script>";

                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function eliminar_administrador($conexion, $administrador, $codigo_eliminar) {
        $administrador_insertado = false;
        //$administrador = new Administrador();

        if (isset($conexion)) {
            try {

                $observacion = $administrador->getObservacion();
                $estado = $administrador->getEstado();

                $sql = 'UPDATE administradores SET observacion=:observacion, estado=:estado WHERE codigo_administrador = :codigo_eliminacion';

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':observacion', $observacion, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                $sentencia->bindParam(':codigo_eliminacion', $codigo_eliminar, PDO::PARAM_INT);

                $administrador_insertado = $sentencia->execute();

                echo '<script>swal("Excelente!", "Registro Eliminado con exito", "success");</script>';
                //echo '<script>location.href="inicio_seguridad.php";</script>';
            } catch (PDOException $ex) {
                echo "<script>swal('Excelente!', 'hubo pedo '$sql' ', 'success');</script>";

                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

     public static function obtener_nactivo($conexion,$cod) {
        
        if (isset($conexion)) {
            try {

                $sql = "SELECT
                        COUNT( actvos.codigo_tipo)
                        FROM
                        actvos
                        WHERE
                        actvos.codigo_tipo = '$cod'"; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                     $r=$row[0] ;
                }
                return $r; 
                    
                
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
         
    }

}

?>