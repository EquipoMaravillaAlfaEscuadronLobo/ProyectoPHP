<?php

class Repositorio_usuario {

    public static function insertar_usuario($conexion, $usuario) {

        $usuario_insertado = false;
        //  $usuario = new Usuario();
        if (isset($conexion)) {

            try {
                $numero = self::numero_de_usuarios($conexion);

                ini_set('date.timezone', 'America/El_Salvador');
                $anio = date("y");


                $carnet = strtoupper((substr($usuario->getNombre(), 0, 1) . substr($usuario->getApellido(), 0, 1))) . $anio . '-' . ($numero + 1);
                $institucion = $usuario->getCodigo_institucion();
                $nombre = $usuario->getNombre();
                $apellido = $usuario->getApellido();
                $telefono = $usuario->getTelefono();
                $email = $usuario->getEmail();
                $direccion = $usuario->getDireccion();
                $estado = 1;
                $sexo = $usuario->getSexo();
                $observaciones = "";
                $foto = $usuario->getFoto();

                $sql = "INSERT INTO usuarios(codigo_usuario,codigo_institucion,nombre,apellido,telefono,correo,direccion,estado,sexo,observaciones,foto)
                    values (:codigo_usuario,:codigo_institucion,:nombre,:apellido,:telefono,:correo,:direccion,:estado,:sexo,:observaciones,'$foto') ";


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
                $accion = 'se inserto al usuario ' . $nombre . ' ' . $apellido;
                self::insertar_bitacora($conexion, $accion);



                echo '<script>
    swal({
        title: "Exito!",
        text: "Usuario Registrado desea imprimir el carnet?",
        type: "success",
        showCancelButton: true,
        confirmButtonClass: "btn-danger",
        confirmButtonText: "Sí, Imprimir",
        cancelButtonText: "No, Salir",
        closeOnConfirm: false,
        closeOnCancel: false
    },
    function (isConfirm) {
        if (isConfirm) {
            var url = "../usuario/reportes/imprimir_carnet.php?carnet=' . $carnet . '" ;

            var a = document.createElement("a");
            a.target = "_blank";
            a.href = url;
            a.click();
        } else {
            location.href = "../usuario/inicio_usuario.php";
        }
    });
</script>';
            } catch (PDOException $ex) {
                //echo '<script>swal("No se puedo realizar el registro", "Favor '.$ex->getMessage().' revisar los  datos e intentar nuevamente", "warning");</script>';
                echo '<script>swal({
                    title: "Error!",
                    text: "por favor intente más tarde",
                    type: "error",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_usuario.php";
                    
                });</script>';
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
                // echo 'esta buscanso<br>';
                $total_usuario = $resultado['total'];
            } catch (PDOException $ex) {
                echo '<script>swal({
                    title: "Error!",
                    text: "por favor revise los datos e intente nuevamente",
                    type: "error",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_usuario.php";
                    
                });</script>';
                //echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
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
                        $usuario->setFoto($fila['foto']);
                        $usuario->setObservacion($fila['observaciones']);
                        $usuario->setMotivo_eliminacion($fila['motivo_eliminacion']);

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

    public static function lista_usuarios_completa($conexion) {
        $lista_usuarios = array();

        if (isset($conexion)) {
            try {
                $sql = "select * from usuarios";
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
                        $usuario->setFoto($fila['foto']);
                        $usuario->setObservacion($fila['observaciones']);
                        $usuario->setMotivo_eliminacion($fila['motivo_eliminacion']);

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

    public static function lista_usuarios_eliminados($conexion) {
        $lista_usuarios = array();

        if (isset($conexion)) {
            try {
                $sql = "select * from usuarios where estado = 0";
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
                        $usuario->setFoto($fila['foto']);
                        $usuario->setObservacion($fila['observaciones']);
                        $usuario->setMotivo_eliminacion($fila['motivo_eliminacion']);

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

    public static function lista_usuarios_de_baja($conexion) {
        $lista_usuarios = array();

        if (isset($conexion)) {
            try {
                $sql = "select * from usuarios where estado = 0";
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
                        $usuario->setFoto($fila['foto']);
                        $usuario->setMotivo_eliminacion($fila['motivo_eliminacion']);

                        $lista_usuarios[] = $usuario;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }


        return $lista_usuarios;
    }

    public static function actualizar_usuario($conexion, $usuario, $carnet) {


        $usuario_insertado = false;
        //$usuario = new Usuario();
        if (isset($conexion)) {
            try {
                //echo 'hay conexion<br>';
                $nombre = $usuario->getNombre();
                $apellido = $usuario->getApellido();
                $direccion = $usuario->getDireccion();
                $email = $usuario->getEmail();
                $telefono = $usuario->getTelefono();
                $instittucion = $usuario->getCodigo_institucion();
                $sexo = $usuario->getSexo();
                $foto = $usuario->getFoto();


                if ($foto == "") {
                    $sql = 'UPDATE usuarios SET codigo_institucion=:institucion,nombre=:nombre,apellido=:apellido,telefono=:telefono,correo=:correo,direccion=:direccion,sexo=:sexo where codigo_usuario = :carnet';
                } else {

                    $sql = 'UPDATE usuarios SET codigo_institucion=:institucion,nombre=:nombre,apellido=:apellido,telefono=:telefono,correo=:correo,direccion=:direccion,sexo=:sexo,foto=:foto where codigo_usuario = :carnet';
                }
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':carnet', $carnet, PDO::PARAM_STR);
                $sentencia->bindParam(':institucion', $instittucion, PDO::PARAM_INT);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $sentencia->bindParam(':correo', $email, PDO::PARAM_STR);
                $sentencia->bindParam(':sexo', $sexo, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);

                if ($foto != "") {
                    $sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);
                }

                $administrador_insertado = $sentencia->execute();
                $accion = 'se actualizaron los datos del usuario ' . $nombre . " " . $apellido;

                self::insertar_bitacora($conexion, $accion);

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
                //echo "<script>swal('Excelente!', 'hubo incombenientes  '$sql' ', 'success');</script>";
                //echo 'problemas con sql';
                echo '<script>swal({
                    title: "Error!",
                    text: "Por favor intente más tarde",
                    type: "error",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_usuario.php";
                    
                });</script>';

                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo 'no hay conexion';
        }
    }

    public static function eliminar_usuario($conexion, $usuario, $carnet) {


        $usuario_insertado = false;
        // $usuario = new Usuario();
        if (isset($conexion)) {
            try {
                //echo 'hay conexion<br>';
                //echo 'el carnet es'. $carnet;
                $observacion = self::obtener_expediete($conexion, $carnet) . ' el usuario fue eliminado por:' . $usuario->getObservacion();
                $estado = 1;

                $sql = 'UPDATE usuarios SET estado=:estado,observaciones=:observaciones,motivo_eliminacion=:motivo_eliminacion where codigo_usuario = :carnet';

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':carnet', $carnet, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                $sentencia->bindParam(':observaciones', $observacion, PDO::PARAM_STR);
                $sentencia->bindParam(':motivo_eliminacion', $observacion, PDO::PARAM_STR);

                $usuario_insertado = $sentencia->execute();

                $accion = "se dio de baja al usuario " . $usuario->getNombre() . ' por el siguiente motivo: ' . $observacion;
                self::insertar_bitacora($conexion, $accion);

                echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Eliminado con exito!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_usuario.php";
                    
                });</script>';
            } catch (PDOException $ex) {
                //echo "<script>swal('Excelente!', 'hubo incombenientes  '$sql' ', 'success');</script>";
                echo '<script>swal({
                    title: "Error!",
                    text: "Por favor intente más tarde",
                    type: "error",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_usuario.php";
                    
                });</script>';
                //echo 'problemas con sql';
                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo 'no hay conexion';
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
            } catch (PDOException $ex) {
                echo '<script>swal("Error", "Por favor intente más tarde", "error");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function comprobar_prestamos_activos($conexion, $usuario) {
        $total = null;
        //echo 'no hay conexion ';
        if (isset($conexion)) {
            try {
                //echo 'hay conexion';
                $sql = "SELECT
                        count(*) as total
                        FROM
                        usuarios
                        INNER JOIN prestamo_activos ON prestamo_activos.usuarios_codigo = usuarios.codigo_usuario
                        where prestamo_activos.usuarios_codigo = '$usuario' and prestamo_activos.estado = '0'"; ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $total = $resultado['total'];
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $total;
    }

    public static function comprobar_prestamos_libros($conexion, $usuario) {
        $total = null;
        //echo 'no hay conexion ';
        if (isset($conexion)) {
            try {
                //echo 'hay conexion';
                $sql = "SELECT
                        count(*) as total
                        FROM
                        usuarios
                        INNER JOIN prestamo_libros ON prestamo_libros.codigo_usuario = usuarios.codigo_usuario
                        where usuarios.codigo_usuario = '$usuario' AND prestamo_libros.estado = '0'";
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();

                $total = $resultado['total'];
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $total;
    }

    public static function usuario_seleccionado($conexion, $codigo) {
        $lista_usuarios = array();

        if (isset($conexion)) {
            try {
                $sql = "SELECT
                usuarios.codigo_usuario,
                usuarios.codigo_institucion,
                usuarios.nombre,
                usuarios.apellido,
                usuarios.telefono,
                usuarios.correo,
                usuarios.foto,
                usuarios.direccion,
                usuarios.sexo,
                usuarios.estado,
                usuarios.observaciones,
                institucion.nombre
                FROM
                usuarios
                INNER JOIN institucion ON usuarios.codigo_institucion = institucion.codigo_institucion
                where codigo_usuario = '$codigo'";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuario = new Usuario();

                        $usuario->setApellido($fila['apellido']);
                        $usuario->setCodigo_institucion($fila['11']);
                        $usuario->setCodigo_usuario($fila['codigo_usuario']);
                        $usuario->setCorreo($fila['correo']);
                        $usuario->setDireccion($fila['direccion']);
                        $usuario->setEmail($fila['correo']);
                        $usuario->setNombre($fila['2']);
                        $usuario->setSexo($fila['sexo']);
                        $usuario->setTelefono($fila['telefono']);
                        $usuario->setFoto($fila['foto']);

                        $lista_usuarios[] = $usuario;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista_usuarios;
    }

    public static function ultimo_usuario_insertado($conexion) {
        $usuario = new Usuario();
        if (isset($conexion)) {
            try {
                $sql = "select * from usuarios desc limit 1";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuario = new Usuario();
                        $usuario->setCodigo_usuario($fila['codigo_usuario']);
                        echo $fila['codigo_usuario'];
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $usuario;
    }

    public static function obtener_expediete($conexion, $codigo) {
        $expediente = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT usuarios.observaciones FROM usuarios WHERE usuarios.codigo_usuario = '$codigo'";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                $hora = date("d/m/Y");

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $expediente = ($fila['0']);
                        if ($expediente == '') {
                            $expediente = $hora . " ";
                        } else {
                            $expediente = ($fila['0'] . " <br>" . $hora . ' ');
                        }
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $expediente;
    }

    public static function obtener_observaciones_activo($conexion, $codigo) {
        $expediente = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
                        prestamo_activos.observacion,
                        usuarios.codigo_usuario
                        FROM
                        usuarios
                        INNER JOIN prestamo_activos ON prestamo_activos.usuarios_codigo = usuarios.codigo_usuario
                        WHERE codigo_usuario  = '$codigo'";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();


                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $expediente =  $expediente . $fila['0'] . '<br>';
                   }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $expediente;
    }

    public static function obtener_observaciones_libro($conexion, $codigo) {
        $expediente = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
                        prestamo_libros.observaciones
                        FROM
                        usuarios
                        INNER JOIN prestamo_libros ON prestamo_libros.codigo_usuario = usuarios.codigo_usuario
                        WHERE usuarios.codigo_usuario = '$codigo'";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $expediente = $expediente . ($fila['0']) . '<br>';
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $expediente;
    }

}

?>
