<?php

class Repositorio_usuario {

    public static function insertar_usuario($conexion, $usuario) {

        $usuario_insertado = false;
        //  $usuario = new Usuario();
        if (isset($conexion)) {

            try {
                $numero = self::numero_de_usuarios($conexion);

                $carnet = strtoupper((substr($usuario->getNombre(), 0, 1) . substr($usuario->getApellido(), 0, 1))) . '17' . '-' . ($numero + 1);
                $institucion = $usuario->getCodigo_institucion();
                $nombre = $usuario->getNombre();
                $apellido = $usuario->getApellido();
                $telefono = $usuario->getTelefono();
                $email = $usuario->getEmail();
                $direccion = $usuario->getDireccion();
                $estado = 1;
                $sexo = $usuario->getSexo();
                $observaciones = "";

                $sql = 'INSERT INTO usuarios(codigo_usuario,codigo_institucion,nombre,apellido,telefono,correo,direccion,estado,sexo,observaciones)'
                        . ' values (:codigo_usuario,:codigo_institucion,:nombre,:apellido,:telefono,:correo,:direccion,:estado,:sexo,:observaciones)';

                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':codigo_usuario', $carnet, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo_institucion', $institucion, PDO::PARAM_INT);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $sentencia->bindParam(':correo', $email, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                $sentencia->bindParam(':sexo', $sexo, PDO::PARAM_STR);
                $sentencia->bindParam(':observaciones', $observaciones, PDO::PARAM_STR);

                $usuario_insertado = $sentencia->execute();

                echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Guardado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_usuario.php";
                    
                });</script>';
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo 'no hay conexion';
        }
    }

    public static function numero_de_usuarios($conexion) {
        $total_usuario = NULL;


        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*)as total FROM usuarios";
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                echo 'esta buscanso<br>';
                $total_usuario = $resultado['total'];
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }

        return $total_usuario;
    }

    public static function lista_usuarios($conexion) {
        $lista_usuarios = array();

        if (isset($conexion)) {
            try {
                $sql = "select * from usuarios where estado = 1";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuario = new Usuario();

                        $usuario->setApellido($fila['apellido']);
                        $usuario->setCodigo_institucion($fila['codigo_institucion']);
                        $usuario->setCodigo_usuario($fila['codigo_usuario']);
                        $usuario->setCorreo($fila['correo']);
                        $usuario->setDireccion($fila['direccion']);
                        $usuario->setEmail($fila['correo']);
                        $usuario->setNombre($fila['nombre']);
                        $usuario->setSexo($fila['sexo']);
                        $usuario->setTelefono($fila['telefono']);

                        $lista_usuarios[] = $usuario;
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

        return $lista_usuarios;
    }

    public static function actualizar_usuario($conexion, $usuario, $carnet) {
        
        echo 'esta en actualizar usuario<br>';
        $usuario_insertado = false;
        //$usuario = new Usuario();
        if (isset($conexion)) {
            try {
                echo 'hay conexion<br>';
                $nombre = $usuario->getNombre();
                $apellido = $usuario->getApellido();
                $direccion = $usuario->getDireccion();
                $email = $usuario->getEmail();
                $telefono = $usuario->getTelefono();
                $instittucion = $usuario->getCodigo_institucion();
                $sexo = $usuario->getSexo();

                $sql = 'UPDATE usuarios SET codigo_institucion=:institucion,nombre=:nombre,apellido=:apellido,telefono=:telefono,correo=:correo,direccion=:direccion,sexo=:sexo where codigo_usuario = :carnet';

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':carnet', $carnet, PDO::PARAM_STR);
                $sentencia->bindParam(':institucion', $instittucion, PDO::PARAM_INT);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $sentencia->bindParam(':correo', $email, PDO::PARAM_STR);
                $sentencia->bindParam(':sexo', $sexo, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);

                $administrador_insertado = $sentencia->execute();
                echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido actualizado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_usuario.php";
                    
                });</script>';
            } catch (PDOException $ex) {
                echo "<script>swal('Excelente!', 'hubo incombenientes  '$sql' ', 'success');</script>";
                echo 'problemas con sql';
                print 'ERROR: ' . $ex->getMessage();
            }
        }  else {
            echo 'no hay conexion';    
        }
    }
    
        public static function eliminar_usuario($conexion, $usuario, $carnet) {
        
        echo 'esta en eliminar usuario<br>';
        $usuario_insertado = false;
        //$usuario = new Usuario();
        if (isset($conexion)) {
            try {
                echo 'hay conexion<br>';
                $observacion = $usuario->getObservacion();
                $estado = 0;
                
                $sql = 'UPDATE usuarios SET estado=:estado,obsevacione=:observaciones where codigo_usuario = :carnet';

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':carnet', $carnet, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                $sentencia->bindParam(':observaciones', $observacion, PDO::PARAM_STR);
                

                $usuario_insertado = $sentencia->execute();
                echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido actualizado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    
                    
                });</script>';
            } catch (PDOException $ex) {
                echo "<script>swal('Excelente!', 'hubo incombenientes  '$sql' ', 'success');</script>";
                echo 'problemas con sql';
                print 'ERROR: ' . $ex->getMessage();
            }
        }  else {
            echo 'no hay conexion';    
        }
    }

}

?>
