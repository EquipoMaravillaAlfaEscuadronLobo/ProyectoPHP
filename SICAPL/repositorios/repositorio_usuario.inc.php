<?php

class Repositorio_usuario {

    //esta funcion es ocupada desde la vista registro_usuario que esta en la carpeta usuario
    //es utilizada para el registro de usuarios
    //recibe como parametro la conexion a la base de datos, y un objeto de tipo usuario con los datos que se
    //desean registrar
    public static function insertar_usuario($conexion, $usuario) {

        $usuario_insertado = false;
        //  $usuario = new Usuario();
        if (isset($conexion)) {

            try 
            {   //obtenemos el numero de usuarios tegistrados en la base de datos 
                $numero = self::numero_de_usuarios($conexion);

                //establesemos la zona horar
                ini_set('date.timezone', 'America/El_Salvador');
                
                //obtenemos el año actual
                $anio = date("y");

               //generamos el carnet tomando las primera letra del nombre y apellido, 
               //concatenamos el año y el correlativo de usuarios mas uno
                $carnet = strtoupper((substr($usuario->getNombre(), 0, 1) . substr($usuario->getApellido(), 0, 1))) . $anio . '-' . ($numero + 1);
                
               
                //recuperamos los datos 
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
                
//                preparamos y ejecutamos el sql

                $sql = "INSERT INTO usuarios(codigo_usuario,codigo_institucion,nombre,apellido,telefono,correo,direccion,estado,sexo,observaciones,foto)
                    values (:codigo_usuario,:codigo_institucion,:nombre,:apellido,:telefono,:correo,:direccion,:estado,:sexo,:observaciones,'$foto') ";


                $sentencia = $conexion->prepare($sql);

                //asignamos los parametros para el registro
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
                
                //preparamos el registro de accion y lo guardamos en la base de datos 
                $accion = 'Se registro al usuario ' . $nombre . ' ' . $apellido;
                self::insertar_bitacora($conexion, $accion);


              //informamos al administrador y damos la opcion de imprimir carnet
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
               //informamos si hay problemas con la conexion
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
    //este metodo es utlilizado por la funcion registro de usuarios, 
    //devuelve el numero de usuarios registrados en la base de datos 
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

                print 'ERROR: ' . $ex->getMessage();
            }
        }
        ///retornamos la cantidad de usuarios registrados 
        return $total_usuario;
    }
   
    ///esta funcion es utilizada desde la vista listar_usuario que se encuentra en la carpeta de de usuaros
    //devuelve un array de tipo usuario con todos los usuaros que esten activos (estado = 1)
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

                        //gaurdamos los registro en objeto
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
                        $nombre_institucion = self::nombre_institucion($conexion, $fila['codigo_institucion']);
                        $usuario->setNombre_institucion($nombre_institucion);
                        
                        //guardamos objetos en array
                        $lista_usuarios[] = $usuario;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }

        ///retornamos la lista
        return $lista_usuarios;
    }
    
    //esta funcion es ocupada por el archivo expediente_usuario que se encuentra en la carpeta consultas, que a la 
    //vez se encuentra en la carpeta usuario, es utilizada para listar a todos los usuarios para generar reportes
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

                        ///guardamos registro en objeto usuairo
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

                        //guardamos objeto usuaro en array
                        $lista_usuarios[] = $usuario;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        //devolvemos el array
        return $lista_usuarios;
    }

   
    //esta funcion es utilizada por la vista usuarios eliminados que se encuetra en la carpeta usuaro
    //lista a todos los usuarios que han sido dados de baja (estado = 0)
    //devuelve un array de tipo usuario 
    //recibe como parametros solamente la conexion a la base de datos 
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

                        //guardamos los registros en un objeto de tipo usuario
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

                        //guardamos los objetos usuarios en un array
                        $lista_usuarios[] = $usuario;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        //retornamos el rray
        return $lista_usuarios;
    }

    //esta funcion es utilizda por la vista editar_usuario que se encuentra en la carpeta usuario
    //se utiliza para actualizar datos de un usuario en espesifico
    //recibe como parametros: la conexion a la base datos, un objeto de tipo usuario con los datos para actualizar
    //y el carnet del usuario que se quiere actualizar
    public static function actualizar_usuario($conexion, $usuario, $carnet) {


        $usuario_insertado = false;
        
        if (isset($conexion)) {
            try {
                //obtenemos los datos enviados desde el formulario
                $nombre = $usuario->getNombre();
                $apellido = $usuario->getApellido();
                $direccion = $usuario->getDireccion();
                $email = $usuario->getEmail();
                $telefono = $usuario->getTelefono();
                $instittucion = $usuario->getCodigo_institucion();
                $sexo = $usuario->getSexo();
                $foto = $usuario->getFoto();

                //verificamos si la foto ha sido actualizada 
                if ($foto == "") {
                    $sql = 'UPDATE usuarios SET codigo_institucion=:institucion,nombre=:nombre,apellido=:apellido,telefono=:telefono,correo=:correo,direccion=:direccion,sexo=:sexo where codigo_usuario = :carnet';
                } else {

                    $sql = 'UPDATE usuarios SET codigo_institucion=:institucion,nombre=:nombre,apellido=:apellido,telefono=:telefono,correo=:correo,direccion=:direccion,sexo=:sexo,foto=:foto where codigo_usuario = :carnet';
                }
                //preparamos el sql y enviamos los parametros
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
                
                ///preparamos el registro de la accion y lo guardamos en la base de datos 
                $accion = 'Se actualizaron los datos del usuario ' . $nombre . " " . $apellido;
                self::insertar_bitacora($conexion, $accion);

                 ///informamos al usuario lo sucedio y redireccionamos segun sea el caso
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
                ///si hay problemas con la ejecucion del sql informamos al usuario y redireccionamos 
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
    
    //esta funcion es ocupada por la vista eliminar_usuario que se encuentra en la carpeta usuario
    //actializa el estado del usuario a inactivo (estado = 0)
    //recibe como parametro la conexion a la bse de datos, un objeto de tipo usuaro que contiene la 
    //informacion sobre la eliminacion y el carnet del usuario que se desea eliminar
    public static function eliminar_usuario($conexion, $usuario, $carnet) {


        $usuario_insertado = false;
        // $usuario = new Usuario();
        if (isset($conexion)) {
            try {
                //echo 'hay conexion<br>';
                //echo 'el carnet es'. $carnet;
                $observacion = $usuario->getObservacion();
                $estado = 0;
                
                //preparamos el sql y enviamos los parametros a actualizar
                $sql = 'UPDATE usuarios SET estado=:estado,observaciones=:observaciones,motivo_eliminacion=:motivo_eliminacion where codigo_usuario = :carnet';

                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':carnet', $carnet, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                $sentencia->bindParam(':observaciones', $observacion, PDO::PARAM_STR);
                $sentencia->bindParam(':motivo_eliminacion', $observacion, PDO::PARAM_STR);

                //ejecutamos la sentencia
                $usuario_insertado = $sentencia->execute();

                //preparamos la accion que se guardara en la bitacora y la enviamos con el metodo insertar_bitacora
                $accion = "Se dió de baja al usuario " . $usuario->getNombre() . ' por el siguiente motivo: ' . $observacion;
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

    //este metodo se ocupar en la vista eliminar usuario que se encuentra en la carpeta usuario
    //sirver para verificar si el usuario a eliminar cuenta o no con prestamos de activos sin finalizar 
    //retorna un booleano segun sea el caso
    //recibe como parametros la conexion de la base de datos y el carnet del usuario que se desea eliminar
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

                //numero de prestamos pendiente, si es mayor de cero se considera true
                $total = $resultado['total'];
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $total;
    }
    
    //este metodo se ocupar en la vista eliminar usuario que se encuentra en la carpeta usuario
    //sirver para verificar si el usuario a eliminar cuenta o no con prestamos de libros sin finalizar 
    //retorna un booleano segun sea el caso
    //recibe como parametros la conexion de la base de datos y el carnet del usuario que se desea eliminar
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

                //numero de prestamos pendiente, si es mayor de cero se considera true
                $total = $resultado['total'];
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $total;
    }

    
    //esta funcion es utilizada por la vista lista_carnet_alumno que se encuentra en la carpeta consulta, que 
    //a su vez se encuentra en la carpeta usuaro, se utiliza par seleccionar todos los datos de un usuario en espesifico
    //recibe como parametros la conexion a la base de datos y el carnet del usuario deseado
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
                
                //preparando y ejecutando el sql
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                
                //recorriendo el array
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuario = new Usuario();
                        //guardando el resultado en un objeto de tipo usuario
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
                        
                        //guardando los datos en un array
                        $lista_usuarios[] = $usuario;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista_usuarios;
    }

    
    ///esta funcion es para saber cual fue el ultimo usuario ingresado en la base de datos
    //recibe como parametro la conexion a la base de datos
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

    ///esta funcion es ocupada en la vista expediente_usuario que esta en la carpeta consulta, que se encuentra en la 
    //carpeta usuario
    //es utulizada para listar a todas las observaciones que han sido realizadas a un prestamo de activo que un usuario
    //en espesifico han realizado
    //recibe como parametros la conexion a la base de datos y el carnet de dicho usuario
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
                        WHERE codigo_usuario  = '$codigo' and prestamo_activos.observacion!=''";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                ///recorremos el array de todos los prestamos 
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        ///concatenamos y damos un salto de linea de cada observacion
                        $expediente =  $expediente . $fila['0'] . '<br>';
                   }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $expediente;
    }

    ///esta funcion es ocupada en la vista expediente_usuario que esta en la carpeta consulta, que se encuentra en la 
    //carpeta usuario
    //es utulizada para listar a todas las observaciones que han sido realizadas a un prestamo de libros que un usuario
    //en espesifico han realizado
    //recibe como parametros la conexion a la base de datos y el carnet de dicho usuario
    public static function obtener_observaciones_libro($conexion, $codigo) {
        $expediente = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
                        prestamo_libros.observaciones
                        FROM
                        usuarios
                        INNER JOIN prestamo_libros ON prestamo_libros.codigo_usuario = usuarios.codigo_usuario
                        WHERE usuarios.codigo_usuario = '$codigo' and prestamo_libros.observaciones!=''";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    ///recorremos el array de todos los prestamos 
                    foreach ($resultado as $fila) {
                        ///concatenamos y damos un salto de linea de cada observacion
                        $expediente = $expediente . ($fila['0']) . '<br>';
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $expediente;
    }
    
    //metodo utilizado en la vista alumnos_institucion, es utilizada para obtener el nombre de las instituciones
    // y mostrarlas como leyenda de la grafica
    //recibe como parametros la conexion a la base de datos y el codigo de la institucion 
    public static function nombre_institucion($conexion, $codigo) {
        $nombre = '';

        if (isset($conexion)) {
            try {
                //preparamos y ejecutamos la sentencia
                $sql = "SELECT institucion.codigo_institucion, institucion.nombre FROM institucion WHERE codigo_institucion = '$codigo'";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        
                      $nombre = $fila['1'];  
                        
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        //retornamos el nombre de la institucion
        return $nombre;
    }

    // esta funcion es utilizada en la vista restaurar_usuario, es utilizada para cambiar el estado de un
    //usuario en espesifico de inactivo a activo (estado = 1)
    //recibe como parametros la conexion a la base de datos, el carnet del usuario a restaurar, y el nombre del usuario
    public static function restaurar_usuario($conexion, $carnet ,$nombre) {

        $usuario_insertado = false;
        
        if (isset($conexion)) {
            try {
                
                //preparamos la sentencia sql y la ejecutamos
                $estado = 1;

                $sql = 'UPDATE usuarios SET estado=:estado,observaciones=:observaciones,motivo_eliminacion=:motivo_eliminacion where codigo_usuario = :carnet';

                $observacion ='';
                
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':carnet', $carnet, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                $sentencia->bindParam(':observaciones', $observacion, PDO::PARAM_STR);
                $sentencia->bindParam(':motivo_eliminacion', $observacion, PDO::PARAM_STR);

                $usuario_insertado = $sentencia->execute();
                
                
                ///preparamos el mensaje que se enviara para ser guardado en la bitacora
                $accion = "Se restauro al usuario " . $nombre ;
                self::insertar_bitacora($conexion, $accion);

                echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido Eliminado con exito!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="../inicio_usuario.php";
                    
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
                    location.href="../inicio_usuario.php";
                    
                });</script>';
                //echo 'problemas con sql';
                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo 'no hay conexion';
        }
    }

}

?>
