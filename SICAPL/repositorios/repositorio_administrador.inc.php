<?php

class Repositorio_administrador {

    public static function insertar_administrador($conexion, $administrador) {
        $administrador_insertado = false;
        // $administrador = new Administrador();
        if (isset($conexion)) {
            try {
                echo 'hay conexion';
                $codigo_administrador = $administrador->getCodigo_administrador();
                $pasword = $administrador->getPasword();
                $nivel = $administrador->getNivel();
                $nombre = $administrador->getNombre();
                $apellido = $administrador->getApellido();
                $sexo = $administrador->getSexo();
                $dui = $administrador->getDui();
                $estado = $administrador->getEstado();
                $observacion = $administrador->getObservacion();
                $foto = $administrador->getFoto();
                $email = $administrador->getEmail();
                $fecha = $administrador->getFecha();

                $administradorExistente = self::obtener_administrador($conexion, $codigo_administrador);
                $EmailExistente = self::obtener_email($conexion, $email);

                if ($administradorExistente->getCodigo_administrador() == "") {
                    if ($EmailExistente->getEmail() == "") {

                        echo '<br>codigo valido y correo valido<br>';
                        $sql = 'INSERT INTO administradores(codigo_administrador,pasword,nivel,nombre,apellido,sexo,dui,estado,observacion,foto,email,fecha)'
                                . ' values (:codigo_administrador,:pasword,:nivel,:nombre,:apellido,:sexo,:dui,:estado,:observacion,:foto,:email,:fecha)';
                        ///estos son alias para que PDO pueda trabajar 
                        $sentencia = $conexion->prepare($sql);

                        $sentencia->bindParam(':codigo_administrador', $codigo_administrador, PDO::PARAM_STR);
                        $sentencia->bindParam(':pasword', password_hash($pasword, PASSWORD_DEFAULT), PDO::PARAM_STR);
                        $sentencia->bindParam(':nivel', $nivel, PDO::PARAM_INT);
                        $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                        $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                        $sentencia->bindParam(':sexo', $sexo, PDO::PARAM_BOOL);
                        $sentencia->bindParam(':dui', $dui, PDO::PARAM_STR);
                        $sentencia->bindParam(':estado', $estado, PDO::PARAM_STR);
                        $sentencia->bindParam(':observacion', $observacion, PDO::PARAM_STR);
                        $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                        $sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);
                        $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);

                        $administrador_insertado = $sentencia->execute();
                        
                        self::insertar_bitacora($conexion, 'dfds');
                        

                        echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';
                    } else {
                        echo '<script>'
                        . 'swal("Advetencia!", "El correo que introdujo ya esta en uso, favor introdusca otro", "warning");'
                        . '$("#idNombre").val("' . $nombre . '"); $("#idApellido").val("' . $apellido . '");'
                        . '$("#idUser").val("' . $codigo_administrador . '"); $("#idDui").val("' . $dui . '");'
                        . '$("#idFecha").val("' . $fecha . '"); $("#idEmail").val("' . $email . '");'
                        . 'if ("' . $nivel . '" == "0") {$("#idRoot").attr("checked", "checked");} else {$("#idAdministrador").attr("checked", "checked");}'
                        . 'if ("' . $sexo . '" == "Masculino") {$("#idHombre").attr("checked", "checked");} else {$("#idMujer").attr("checked", "checked");}'
                        . '$("#idListarAdmnistrador").removeClass("active");  $("#idRegistroAdministrador").addClass("active"); '
                        . '$("#idPass1").val("' . $pasword . '"); $("#idPass2").val("' . $pasword . '");  </script>';
                    }
                } else {
                    echo '<script>'
                    . 'swal("Advetencia!", "El nombre de usuario que introdujo ya esta en uso, favor introdusca otro", "warning");'
                    . '$("#idNombre").val("' . $nombre . '"); $("#idApellido").val("' . $apellido . '");'
                    . '$("#idUser").val("' . $codigo_administrador . '"); $("#idDui").val("' . $dui . '");'
                    . '$("#idFecha").val("' . $fecha . '"); $("#idEmail").val("' . $email . '");'
                    . 'if ("' . $nivel . '" == "0") {$("#idRoot").attr("checked", "checked");} else {$("#idAdministrador").attr("checked", "checked");}'
                    . 'if ("' . $sexo . '" == "Masculino") {$("#idHombre").attr("checked", "checked");} else {$("#idMujer").attr("checked", "checked");}'
                    . '$("#idListarAdmnistrador").removeClass("active");  $("#idRegistroAdministrador").addClass("active"); '
                    . '$("#idPass1").val("' . $pasword . '"); $("#idPass2").val("' . $pasword . '");  </script>';
                }
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function obtener_administrador($conexion, $codigo_administrador) {
        $administrador = new Administrador();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM administradores WHERE codigo_administrador='$codigo_administrador' or email='$codigo_administrador'"; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                    $administrador->setCodigo_administrador($row["codigo_administrador"]);
                    $administrador->setPasword($row["pasword"]);
                    $administrador->setNivel($row["nivel"]);
                    $administrador->setEmail($row["email"]);
                    $administrador->setNombre($row["nombre"]);
                    $administrador->setApellido($row["apellido"]);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $administrador;
    }

    public static function lista_administradores($conexion, $codigo) {
        $lista_administradores = array();

        if (isset($conexion)) {
            try {
                $sql = "select * from administradores where (codigo_administrador != '$codigo'  AND estado = 1)";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $administrador = new Administrador();
                        $administrador->setApellido($fila['apellido']);
                        $administrador->setCodigo_administrador($fila['codigo_administrador']);
                        $administrador->setDui($fila['dui']);
                        $administrador->setEstado($fila['estado']);
                        $administrador->setFoto($fila['foto']);
                        $administrador->setNivel($fila['nivel']);
                        $administrador->setNombre($fila['nombre']);
                        $administrador->setObservacion($fila['observacion']);
                        $administrador->setPasword($fila['pasword']);
                        $administrador->setSexo($fila['sexo']);
                        $administrador->setFecha($fila['fecha']);
                        $administrador->setEmail($fila['email']);

                        $lista_administradores[] = $administrador;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
//        echo   'numero de registros en lista registros'. count($lista_administradores) . '<br>';
        //foreach ($lista_administradores as $fila ){
        //    echo $fila ->getNombre(). "<br>";
        //   echo '<img src="data:image/jpg;base64,<?php echo base64_encode($fila["foto"]);';
        // }

        return $lista_administradores;
    }

    public static function actualizar_administrador($conexion, $administrador, $codigo_original, $verificacion) {
        $administrador_insertado = false;
        $administrador_actual = self:: obtener_administrador($conexion, $codigo_original);

        if (isset($conexion)) {
            try {
                echo 'hay conexion<br>';
                $codigo_administrador = $administrador->getCodigo_administrador();
                $pasword = $administrador->getPasword(); ////password plana
                $nivel = $administrador->getNivel();
                $nombre = $administrador->getNombre();
                $apellido = $administrador->getApellido();
                $sexo = $administrador->getSexo();
                $dui = $administrador->getDui();
                $observacion = $administrador->getObservacion();
                $foto = $administrador->getFoto();
                $email = $administrador->getEmail();
                $fecha = $administrador->getFecha();

                if (password_verify($verificacion, $administrador_actual->getPasword())) {///esto es para saber si las contrase;a para modificar es correcta
                    $sql = 'UPDATE administradores SET nombre=:nombre,apellido=:apellido,pasword=:pasword,dui=:dui,nivel=:nivel, fecha=:fecha,email=:email,sexo=:sexo  WHERE codigo_administrador = :codigo_original';

                    $sentencia = $conexion->prepare($sql);
                    $sentencia->bindParam(':codigo_original', $codigo_original, PDO::PARAM_STR);
                    $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                    $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                    $sentencia->bindParam(':dui', $dui, PDO::PARAM_STR);
                    $sentencia->bindParam(':nivel', $nivel, PDO::PARAM_STR);
                    $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);
                    $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                    $sentencia->bindParam(':sexo', $sexo, PDO::PARAM_STR);

                    if ($pasword == 'PASWORD_AC') {
                        $pasword = $administrador_actual->getPasword();
                        $sentencia->bindParam(':pasword', $pasword, PDO::PARAM_STR);
                    } else {
                        $sentencia->bindParam(':pasword', password_hash($pasword, PASSWORD_DEFAULT), PDO::PARAM_STR);
                    }

                    $administrador_insertado = $sentencia->execute();
                    echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido actualizado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';
                } else {
                    echo '<script>'
                    . 'swal("Oops!", "El la contraseña que introdujo no es correcta, por lo que no se haran cambios", "warning"); </script>';
                }
            } catch (PDOException $ex) {
                echo "<script>swal('Ooops!', 'Hubo no se pudo realizar la accion', 'error');</script>";

                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo "no hay conexion";
        }
    }

    public static function eliminar_administrador($conexion, $administrador, $codigo_eliminar, $verificacion) {
        $administrador_insertado = false;
        $administrador_actual = self:: obtener_administrador($conexion, $verificacion);
        echo 'esta es la verificacion<br> ' . $verificacion . '<br>';
        echo 'esta es la password<br>' . $administrador_actual ->getPasword();

        if (isset($conexion)) {
            try {
                
                if (password_verify($verificacion, $administrador_actual->getPasword())) {///esto es para saber si las contrase;a para modificar es correcta
                    $observacion = $administrador->getObservacion();
                    $estado = $administrador->getEstado();

                    $sql = 'UPDATE administradores SET observacion=:observacion, estado=:estado WHERE codigo_administrador = :codigo_eliminacion';
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->bindParam(':observacion', $observacion, PDO::PARAM_STR);
                    $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                    $sentencia->bindParam(':codigo_eliminacion', $codigo_eliminar, PDO::PARAM_INT);
                    $administrador_insertado = $sentencia->execute();


                    echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido actualizado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';
                } else {
                    echo '<script>'
                    . 'swal("Oops!", "El la contraseña que introdujo no es correcta, por lo que no se haran cambios", "warning"); </script>';
                }
            } catch (PDOException $ex) {
                echo "<script>swal('Ooops!', 'Hubo no se pudo realizar la accion', 'error');</script>";

                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo "no hay conexion";
        }
    }

    public static function lista_administradores2($conexion) {
        if (isset($conexion)) {
            try {
                $sql = "select * from administradores where (estado = 1)";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        echo"<option value='" . $fila['codigo_administrador'] . "'>" . $fila['nombre'] . " " . $fila['apellido'] . "</option>";
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
    }

    public static function lista_administradores3($conexion) {
        if (isset($conexion)) {
            try {
                $sql = "select * from administradores where (estado = 1)";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {

                        echo"<option value='" . $fila['codigo_administrador'] . ", " . $fila['nombre'] . " " . $fila['apellido'] . "'>" . $fila['nombre'] . " " . $fila['apellido'] . "</option>";
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
    }

    public static function obtener_email($conexion, $email) {
        $administrador = new Administrador();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM administradores WHERE email='$email'"; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                    $administrador->setCodigo_administrador($row["codigo_administrador"]);
                    $administrador->setPasword($row["pasword"]);
                    $administrador->setNivel($row["nivel"]);
                    $administrador->setEmail($row["email"]);
                    $administrador->setNombre($row["nombre"]);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $administrador;
    }

    public static function obtener_administrador_actual($conexion, $codigo) {
        $administrador = new Administrador();
        //echo 'esta en administradodr actual<br>';
        if (isset($conexion)) {
            //echo 'hay conexion<br>';
            try {
                $sql = "select * from administradores where (codigo_administrador = '$codigo')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $administrador = new Administrador();
                        $administrador->setApellido($fila['apellido']);
                        $administrador->setCodigo_administrador($fila['codigo_administrador']);
                        $administrador->setDui($fila['dui']);
                        $administrador->setEstado($fila['estado']);
                        $administrador->setFoto($fila['foto']);
                        $administrador->setNivel($fila['nivel']);
                        $administrador->setNombre($fila['nombre']);
                        $administrador->setObservacion($fila['observacion']);
                        $administrador->setPasword($fila['pasword']);
                        $administrador->setSexo($fila['sexo']);
                        $administrador->setFecha($fila['fecha']);
                        $administrador->setEmail($fila['email']);
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        } else {
            //echo 'no hay conexion<br>';
        }
        return $administrador;
    }

    public static function actualizar_mis_datos($conexion, $administrador, $codigo_original) {
        $administrador_insertado = false;
        // $administrador = new Administrador();

        if (isset($conexion)) {
            try {
                echo 'hay conexion<br>';
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

                if ($codigo_original == $codigo_original) {
                    $sql = 'UPDATE administradores SET nombre=:nombre,apellido=:apellido,pasword=:pasword,dui=:dui,nivel=:nivel, fecha=:fecha,email=:email,sexo=:sexo  WHERE codigo_administrador = :codigo_original';

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
                    echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido actualizado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_cuenta.php";
                    
                });</script>';
                } else {
                    echo "<script>swal('Excelente!', 'hubo incombenientes '$sql' ', 'success');</script>";
                }
            } catch (PDOException $ex) {
                echo "<script>swal('Excelente!', 'hubo incombenientes  '$sql' ', 'success');</script>";

                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo "no hay conexion";
        }
    }
    
    public static function insertar_bitacora($conexion, $accion) {
        $administrador_insertado = false;
                if (isset($conexion)) {
            try {
        
                echo 'esta en bitacora';
               
                            $sql = 'INSERT INTO bitacora (codigo_administrador, accion, fecha) VALUES ("fsdfsdfsddd", "eeee", "2017-12-12 08:16:28");';
                        
                        ///estos son alias para que PDO pueda trabajar 
                        $sentencia = $conexion->prepare($sql);
                        $administrador_insertado = $sentencia->execute();
                        
                        echo 'la bitacora ha sido guardada';                       

                       
                 
                
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

}

?>