<?php

class Repositorio_detalle {

    public static function insertar_detalle ($conexion, $detalle ) {
        $detalle_insertado = false;        
        if (isset($conexion)) {
            try {

                $codigo_detalle = $detalle->getCodigo_detalle();
                $serie = $detalle->getSeri();
                $color = $detalle->getColor();
                $marca = $detalle->getMarca();
                $modelo = $detalle->getModelo();
                $ram = $detalle->getRam();
                $memoria = $detalle->getMemoria();
                $sistema = $detalle->getSistema();
                $dimensiones= $detalle->getDimencione();
                $otros = $detalle->getOtros();
                $proce = $detalle->getProcesador();
                

                //$administradorExistente = self::obtener_administrador($conexion, $codigo_administrador);
                //if ($administradorExistente->getCodigo_administrador() == "") {

                    $sql = 'INSERT INTO detalles(codigo_detalle,serie,color,marca,modelo,ram,memoria,sistema,dimensiones,otros,procesador)'
                            . ' values (:codigo_detalle,:serie,:color,:marca,:modelo,:ram,:memoria,:sistema,:dimensiones,:otros,:proce)';
                    ///estos son alias para que PDO pueda trabajar 
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->bindParam(':codigo_detalle', $codigo_detalle, PDO::PARAM_STR);
                    $sentencia->bindParam(':serie', $serie, PDO::PARAM_STR);
                    $sentencia->bindParam(':color', $color, PDO::PARAM_STR);
                    $sentencia->bindParam(':marca', $marca, PDO::PARAM_STR);
                    $sentencia->bindParam(':modelo', $modelo , PDO::PARAM_STR);
                    $sentencia->bindParam(':ram', $ram, PDO::PARAM_STR);
                    $sentencia->bindParam(':memoria', $memoria, PDO::PARAM_STR);
                    $sentencia->bindParam(':sistema',  $sistema, PDO::PARAM_STR);
                    $sentencia->bindParam(':dimensiones', $dimensiones, PDO::PARAM_STR);
                    $sentencia->bindParam(':otros', $otros, PDO::PARAM_STR);
                     $sentencia->bindParam(':proce', $proce, PDO::PARAM_STR);
 //echo '<script>alert("'.$sentencia.'");</script>'; 
                    $detalle_insertado= $sentencia->execute();
                    
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
                echo '<script>swal("No se puedo realizar el registro ", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function obtener_ultimo_detale($conexion) {
        
        if (isset($conexion)) {
            try {

                $sql = "SELECT MAX(codigo_detalle) AS id FROM detalles"; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                     $r=$row[0] ;
                }
                return $r; 
                    
                
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
         
    }

   public static function obtener_detalle($conexion, $codigo_detalle) {
        $detalle = new Detalles();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM detalles WHERE codigo_detalle='$codigo_detalle' "; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                    $detalle->setCodigo_detalle($row["codigo_detalle"]);
                    $detalle->setSeri($row["serie"]);
                    $detalle->setColor($row["color"]);
                    $detalle->setMarca($row["marca"]);
                    $detalle->setModelo($row["modelo"]);
                    $detalle->setRam($row["ram"]);
                    $detalle->setMemoria($row["memoria"]);
                    $detalle->setSistema($row["sistema"]);
                    $detalle->setDimencione($row["dimensiones"]);
                    $detalle->setOtros($row["otros"]);
                    $detalle->setProcesador($row["procesador"]);
                    
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $detalle;
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

    

}

?>