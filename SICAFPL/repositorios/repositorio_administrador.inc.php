<?php

class Repositorio_administrador {

    ///esta funcion sera utilizada desde la la vista registro_administrador que se encuentra alojada en la carpeta 
    //seguridad, recive como pararametros: conexion, que sera ocupada para acceder a la base de datos, 
    // como segundo parametro utilizara  un objeto de tipo administrador en el cual estan los datos que fueron
    //envidados desde la vista
    public static function insertar_administrador($conexion, $administrador) {
        $administrador_insertado = false;

        if (isset($conexion)) {
            try {
                //////se recuperan los datos de objero administrador
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
                $emailExistente = self::obtener_email($conexion, $email);
                $duiExistente = self::verifica_dui($conexion, $dui);


                ///se verifica que el email enviado no esta en uso, si esta registrado se redirecciona a la vista 
                //registro de administrador con los datos previos ingresados y con un mensaje indicando que el 
                //correo ya esta en uso
                if ($emailExistente->getEmail() != '') {
                    echo '<script>'
                    . 'swal("Cuidado!", "El Correo que introdujo ya esta en uso, favor introdusca otro", "warning");'
                    . '$("#idNombre").val("' . $nombre . '"); $("#idApellido").val("' . $apellido . '");'
                    . '$("#idUser").val("' . $codigo_administrador . '"); $("#idDui").val("' . $dui . '");'
                    . '$("#idFecha").val("' . $fecha . '"); $("#idEmail").val("' . $email . '");'
                    . 'if ("' . $nivel . '" == "0") {$("#idRoot").attr("checked", "checked");} else {$("#idAdministrador").attr("checked", "checked");}'
                    . 'if ("' . $sexo . '" == "Masculino") {$("#idHombre").attr("checked", "checked");} else {$("#idMujer").attr("checked", "checked");}'
                    . '$("#idListarAdmnistrador").removeClass("active");  $("#idRegistroAdministrador").addClass("active"); '
                    . '$("#idPass1").val("' . $pasword . '"); $("#idPass2").val("' . $pasword . '");  </script>';
                }
                ///se verifica que el dui enviado no esta en uso, si esta registrado se redirecciona a la vista 
                //registro de administrador con los datos previos ingresados y con un mensaje indicando que el 
                //dui ya esta registrado
                if ($duiExistente->getDui() != '') {
                    echo '<script>'
                    . 'swal("Cuidado!", "El dui que introdujo ya esta en uso, favor introdusca otro", "warning");'
                    . '$("#idNombre").val("' . $nombre . '"); $("#idApellido").val("' . $apellido . '");'
                    . '$("#idUser").val("' . $codigo_administrador . '"); $("#idDui").val("' . $dui . '");'
                    . '$("#idFecha").val("' . $fecha . '"); $("#idEmail").val("' . $email . '");'
                    . 'if ("' . $nivel . '" == "0") {$("#idRoot").attr("checked", "checked");} else {$("#idAdministrador").attr("checked", "checked");}'
                    . 'if ("' . $sexo . '" == "Masculino") {$("#idHombre").attr("checked", "checked");} else {$("#idMujer").attr("checked", "checked");}'
                    . '$("#idListarAdmnistrador").removeClass("active");  $("#idRegistroAdministrador").addClass("active"); '
                    . '$("#idPass1").val("' . $pasword . '"); $("#idPass2").val("' . $pasword . '");  </script>';
                }
                
                ///se verifica que el usuario enviado no esta en uso, si esta registrado se redirecciona a la vista 
                //registro de administrador con los datos previos ingresados y con un mensaje indicando que el 
                //usuario ya esta registrado
                if ($administradorExistente->getCodigo_administrador() != '') {
                    echo '<script>'
                    . 'swal("Cuidado!", "El Usuario que introdujo ya esta en uso, favor introdusca otro", "warning");'
                    . '$("#idNombre").val("' . $nombre . '"); $("#idApellido").val("' . $apellido . '");'
                    . '$("#idUser").val("' . $codigo_administrador . '"); $("#idDui").val("' . $dui . '");'
                    . '$("#idFecha").val("' . $fecha . '"); $("#idEmail").val("' . $email . '");'
                    . 'if ("' . $nivel . '" == "0") {$("#idRoot").attr("checked", "checked");} else {$("#idAdministrador").attr("checked", "checked");}'
                    . 'if ("' . $sexo . '" == "Masculino") {$("#idHombre").attr("checked", "checked");} else {$("#idMujer").attr("checked", "checked");}'
                    . '$("#idListarAdmnistrador").removeClass("active");  $("#idRegistroAdministrador").addClass("active"); '
                    . '$("#idPass1").val("' . $pasword . '"); $("#idPass2").val("' . $pasword . '");  </script>';
                }

                //por ultimo verificamos que que todas las validaciones esten correntas y no se encuentre duplicidad
                if ($administradorExistente->getCodigo_administrador() == "" && $emailExistente->getEmail() == "" && $duiExistente->getDui() == "") {
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
                    
                    ///preparamos el registro que se guardara en la bitacora y luego enviamos el registro a guardarse
                    $mensaje = 'Se registro como administrador a ' . $nombre . ' ' . $apellido;
                    self::insertar_bitacora($conexion, $mensaje);

                    ///si no hay problemas mandamos un mensaje de verificacion y redireccionamos al usuario
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
                }
            } catch (PDOException $ex) {
                //si encontramos problemas con la bse de datos enviamos el mensaje de erro y redireccionamos al usuario
                echo '<script>swal({
                    title: "Error!",
                    text: "Por Favor intente más tarde",
                    type: "warning",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }
   ///este metodo lo utlizamos en el inicio de sesion,devuelve un objeto tipo administrador
   //  con el cua le verifica si el usuario y contraseña coinciden con los ingresados
    public static function obtener_administrador($conexion, $codigo_administrador) {
        $administrador = new Administrador();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM administradores WHERE codigo_administrador='$codigo_administrador' or email='$codigo_administrador'"; ///estos son alias para que PDO pueda trabajar 
               //guardamos los datos en un objeto de tipo administrados
                foreach ($conexion->query($sql) as $row) {
                    $administrador->setCodigo_administrador($row["codigo_administrador"]);
                    $administrador->setPasword($row["pasword"]);
                    $administrador->setNivel($row["nivel"]);
                    $administrador->setEmail($row["email"]);
                    $administrador->setNombre($row["nombre"]);
                    $administrador->setApellido($row["apellido"]);
                    $administrador->setDui($row["dui"]);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        //retornamos el objeto
        return $administrador;
    }
    ///este meto es utilizado en la vista listar administrador para asi poder visualidar todos los administradores
    //esto con el fin de que sean eliminados o modificados, dejamos fuera de esta lista al administrador
    //que actualmente esta con sesion activa y al administrador principal (admin01)
    public static function lista_administradores($conexion, $codigo) {
        $lista_administradores = array();

        if (isset($conexion)) {
            try {
                $sql = "select * from administradores where (codigo_administrador != '$codigo' AND estado = 1 AND codigo_administrador !='admin01')";
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

                        //guardamos la lista en un array
                        $lista_administradores[] = $administrador;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        ///retornamos la lista
        return $lista_administradores;
    }
    //este metodo es utilizado en la vista administradores_eliminados que se encuentra en la carpeta seguridad
    //se utiliza para listar todos los administradores que han sido eliminados (administradores con estado 0)
    //recive como parametro la conexion a la base de datos 
    public static function lista_administradores_eliminados($conexion) {
        $lista_administradores = array();

        if (isset($conexion)) {
            try {
                $sql = "select * from administradores where (estado = '0')";
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

                        //guardamos la lista en el array
                        $lista_administradores[] = $administrador;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista_administradores;
    }

    ///este metodo es utilizado en la vista  eliminar_administrador que se se encuentra en la carpeta seguridad 
    //es utilizada cuando al eliminar un administrador, deben de transferir los activos que estan a su cargo
    //tiene como restriccion al administrador actual y a los administradores que previamente  hallan sido eliminados
    //recive como parametro la conexion a la base de datos y al administrador que se desea eliminar
    public static function lista_administradores_para_baja($conexion, $codigo) {
        $lista_administradores = array();

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM administradores WHERE administradores.codigo_administrador != '$codigo' AND estado = '1'";
                
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

                        //guardamos la lista en el array
                        $lista_administradores[] = $administrador;
                    }
                }
            } catch (PDOException $exc) {
                ///imprimimos posibles errores
                print('ERROR' . $exc->getMessage());
            }
        }
        ///devolvemos el arrat
        return $lista_administradores;
    }

    ///este metodo es utilizado por la vista editar_mis_datos que se encuentra en la carpeta Cuenta 
    //recive como paramietros la conexion a la base de datos, el administrador con los datos que se van a actualizar
    //y como ultimo a  la nueva clase 
    public static function actualizarClave($conexion, $codigo_administrador, $clave) {
        $clave_actualizada = false;
        if (isset($conexion)) {
            try {
                ///se encripta la nueva pass antes de se actualizada en el registro
                $clave = password_hash($clave, PASSWORD_DEFAULT);
                
                
                $sql = "Update administradores set pasword='$clave' where codigo_administrador='$codigo_administrador'";
                $sentencia = $conexion->prepare($sql);
                $clave_actualizada = $sentencia->execute();
            } catch (PDOException $exc) {
                echo $exc->getTraceAsString();
            }
        }
        return $clave_actualizada;
    }
///este metodo es utilizado en la vista editar administrador que se encuentra en la carpeta seguridad
//resive como parametro la conexion a la base de datos, un objeto de tipo administrador que contiene los datos 
//que se quieren actualizar,recibe tambien el codito del administrador que se desea modificar, y como ultimo 
//parametro recive la pass del actual administrador como medida de seguridad
    public static function actualizar_administrador($conexion, $administrador, $codigo_original, $verificacion) {
        $administrador_insertado = false;
        
        //se obtienen los datos del administrador actual
        $administrador_actual = self:: obtener_administrador_actual($conexion, $_SESSION['user']);

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


                //se verifica que la pass del administrador actual sea igual a la introducida
                if (password_verify($verificacion, $administrador_actual->getPasword())) {
                    $sql = 'UPDATE administradores SET nombre=:nombre,apellido=:apellido,pasword=:pasword,dui=:dui,nivel=:nivel, fecha=:fecha,email=:email,sexo=:sexo,foto=:foto  WHERE codigo_administrador = :codigo_original';

                    $sentencia = $conexion->prepare($sql);
                    $sentencia->bindParam(':codigo_original', $codigo_original, PDO::PARAM_STR);
                    $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                    $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                    $sentencia->bindParam(':dui', $dui, PDO::PARAM_STR);
                    $sentencia->bindParam(':nivel', $nivel, PDO::PARAM_STR);
                    $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);
                    $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                    $sentencia->bindParam(':sexo', $sexo, PDO::PARAM_STR);
                    $sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);

                    if ($pasword == 'PASWORD_AC') {

                        $pasword = $administrador_actual->getPasword();
                        $sentencia->bindParam(':pasword', $pasword, PDO::PARAM_STR);
                    } else {
                        $sentencia->bindParam(':pasword', password_hash($pasword, PASSWORD_DEFAULT), PDO::PARAM_STR);
                    }

                    $administrador_insertado = $sentencia->execute();

                    
                    ///preparamos el registro que se guardara en la bitacora y la enviamos
                    $accion = 'Se actualizarón los datos del administrador ' . $codigo_original . "(" . $nombre . ' ' . $apellido . ")";
                    self::insertar_bitacora($conexion, $accion);

                    ///informamos del exito de la accion y redireccionamos a
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
                     ///informamos que el la pass introducida no coincide y redireccionalos al administrador
                    echo '<script>swal({
                    title: "Cuidado!",
                    text: "la contraseña que introdujo no es correcta, por lo que no se haran cambios",
                    type: "warning",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';
                }
            } catch (PDOException $ex) {
                // si tenemos problemas para contactar con la base de datos informamos al administrador
                echo '<script>swal({
                    title: "Error!",
                    text: "Por Favor intente más tarde",
                    type: "warning",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';

                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo "no hay conexion";
        }
    }
    //este metodo es utilizado desde el avista restaurar_administrador 
    //recive como parametros la conexion a la base de datos, un objeto de tipo administrador que contiene los 
    //datos que se van a actualizar, el codigo del administrador que queremos modificar, como ultimo parametro 
    //la pass de administrador actual para verificar su autenticidad
    public static function restaurar_administrador($conexion, $administrador, $codigo_restaurar, $verificacion) {
        $administrador_insertado = false;
        $administrador_actual = self:: obtener_administrador_actual($conexion, $_SESSION['user']);
        if (isset($conexion)) {
            try {
                //verificacmos que la pass del administrador actual coincida con la ingreseada para continuar con 
                // la actualizacion de los datos 
                if (password_verify($verificacion, $administrador_actual->getPasword())) {
                    $observacion = "";
                    $estado = $administrador->getEstado();

                    $sql = 'UPDATE administradores SET observacion=:observacion, estado=:estado WHERE codigo_administrador = :codigo_eliminacion';
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->bindParam(':observacion', $observacion, PDO::PARAM_STR);
                    $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                    $sentencia->bindParam(':codigo_eliminacion', $codigo_restaurar, PDO::PARAM_INT);
                    $administrador_insertado = $sentencia->execute();

                    //// preparamos el registro y lo guardamos en la bitacora
                    $datos_bitacora = self::obtener_administrador_actual($conexion, $codigo_restaurar);
                    $accion = 'Se restauró al administrador ' . $datos_bitacora->getNombre() . ' ' . $datos_bitacora->getApellido();

                    self::insertar_bitacora($conexion, $accion);

                    ///mandamos mensaje de confirmacion
                    echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido restaurado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';
                } else {
                    echo '<script>swal({
                    title: "Advertencia!",
                    text: "La contraseña que introdujo no es correcta, por lo que no se harán combios",
                    type: "warning",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                     },
                 function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';
                }
            } catch (PDOException $ex) {
                echo "<script>swal('Error!', 'Hubo no se pudo realizar la accion', 'error');</script>";

                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo "no hay conexion";
        }
    }
    ///este metodo es utilizado desde la vista eliminar_administrador, recive como parametro la conexion a la bae 
    /// de datos, un objeto de tipo administrador del cual recuperaremos el motivo por el que se elimnara al administrador,
    //el codigo del administrador a eliminar , y una pass que se comparara en la del administrador con sesion activa
    public static function eliminar_administrador($conexion, $administrador, $codigo_eliminar, $verificacion) {
        $administrador_insertado = false;
        $administrador_actual = self:: obtener_administrador_actual($conexion, $_SESSION['user']);
        if (isset($conexion)) {
            try {
                //verificamos que la pass introducida coincida con la del administrador con sisión activa 
                //para asi continuar con el proceso
                
                if (password_verify($verificacion, $administrador_actual->getPasword())) {///esto es para saber si las contrase;a para modificar es correcta
                    $observacion = $administrador->getObservacion();
                    $estado = $administrador->getEstado();

                    $sql = 'UPDATE administradores SET observacion=:observacion, estado=:estado WHERE codigo_administrador = :codigo_eliminacion';
                    $sentencia = $conexion->prepare($sql);
                    $sentencia->bindParam(':observacion', $observacion, PDO::PARAM_STR);
                    $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                    $sentencia->bindParam(':codigo_eliminacion', $codigo_eliminar, PDO::PARAM_INT);
                    $administrador_insertado = $sentencia->execute();

                    //// preparamos el registro de la accion y lo guardamos en la bitacora
                    $datos_bitacora = self::obtener_administrador_actual($conexion, $codigo_eliminar);
                    $accion = 'Se dió de baja al administrador ' . $datos_bitacora->getNombre() . ' ' . $datos_bitacora->getApellido() .
                            ' por el siguiente motivo: ' . $observacion;
                    self::insertar_bitacora($conexion, $accion);

                    ///mandamos mensaje de confirmacion
                    echo '<script>swal({
                    title: "Exito",
                    text: "El registro ha sido eliminado!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';
                } else {
                    echo '<script>swal({
                    title: "Advertencia!",
                    text: "La contraseña que introdujo no es correcta, por lo que no se harán combios",
                    type: "warning",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                     },
                 function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';
                }
            } catch (PDOException $ex) {
                echo "<script>swal('Error!', 'Hubo no se pudo realizar la accion', 'error');</script>";

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

   ///este utilizado en el index, en el caso que el administrador inicie su sesion con el correo
    ///recive como parametros: la conexion a la base de datos, el email con el que se  quiere ingresar 
    
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

    ///esta funcion es utilizada por otras funciones, tiene la mision de obtener los datos de un administrador en 
    //espesifico, recibe como parametro: la conexion a la base de datos y el codigo del administrador 
    //retorna como resultado un objeto del tipo administrador con los datos del administrador si se encuentran
    public static function obtener_administrador_actual($conexion, $codigo) {
        $administrador = new Administrador();
        
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
 ///este metodo es ocupado desde la vista editar_mis_datos desde la carpeta Cuenta 
///recibe como parametro la conexion a la base de datos, un objeto de tipo de administrador con todos los 
//datos del administrador que se desea actualizar, un una pass que se ocupara para verificar por cuestiones de seguridad
    public static function actualizar_mis_datos($conexion, $administrador, $verificacion) {
        $administrador_insertado = false;
        
        //obtenemos los datos del administrador con sesión activa
        $administrador_actual = self:: obtener_administrador_actual($conexion, $administrador->getCodigo_administrador());
//       verificamos la exixtencia de la conexión
        if (isset($conexion)) {

            try {
                echo 'hay conexion<br>';
                $pasword = $administrador->getPasword(); ////password plana
                $nombre = $administrador->getNombre();
                $apellido = $administrador->getApellido();
                $sexo = $administrador->getSexo();
                $dui = $administrador->getDui();
                $foto = $administrador->getFoto();
                $email = $administrador->getEmail();
                $fecha = $administrador->getFecha();

//                 verificamos que la pass ingresada coincida con la del administrador con sesión iniciada
                if (password_verify($verificacion, $administrador_actual->getPasword())) {///esto es para saber si las contrase;a para modificar es correcta
                    $sql = 'UPDATE administradores SET nombre=:nombre,apellido=:apellido,pasword=:pasword,dui=:dui, fecha=:fecha,email=:email,sexo=:sexo,foto=:foto  WHERE codigo_administrador = :codigo_original';

                    $sentencia = $conexion->prepare($sql);
                    $sentencia->bindParam(':codigo_original', $administrador_actual->getCodigo_administrador(), PDO::PARAM_STR);
                    $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                    $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                    $sentencia->bindParam(':dui', $dui, PDO::PARAM_STR);

                    $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);
                    $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                    $sentencia->bindParam(':sexo', $sexo, PDO::PARAM_STR);

                        //verificamos si la foto ha sido actualizada
                    if ($administrador->getFoto() == '') {
                        $foto = $administrador_actual->getFoto();
                        $sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);
                    } else {
                        $foto = $administrador->getFoto();
                        $sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);
                    }


//                    verificamos si la pass ha sido actualizada
                    if ($pasword == 'PASS_AC') {

                        $pasword = $administrador_actual->getPasword();
                        $sentencia->bindParam(':pasword', $pasword, PDO::PARAM_STR);
                    } else {
                        $sentencia->bindParam(':pasword', password_hash($pasword, PASSWORD_DEFAULT), PDO::PARAM_STR);
                    }

                    $administrador_insertado = $sentencia->execute();

                  //preparamos el registro de la accion realizada y lo guardamos en la bitacora
                    $accion = 'El administrador ' . $nombre . ' ' . $apellido . ' actualizó sus datos';
                    self::insertar_bitacora($conexion, $accion);

                    echo '<script>swal({
                    title: "Exito",
                    text: "Datos Actualizados!",
                    type: "success",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="../Cuenta/inicio_datos.php";
                    
                });</script>';
                } else {
                    echo '<script>swal({
                    title: "Cuidado!",
                    text: "la contraseña que introdujo no es correcta, por lo que no se haran cambios",
                    type: "warning",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="../Cuenta/inicio_datos.php";
                    
                });</script>';
                }
            } catch (PDOException $ex) {
                //echo "<script>swal('Ooops!', 'Hubo no se pudo realizar la accion', 'error');</script>";
                echo '<script>swal({
                    title: "Error!",
                    text: "Por Favor intente más tarde",
                    type: "error",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="../Cuenta/inicio_datos.php";
                    
                });</script>';

                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo "no hay conexion";
        }
    }
 ///esta funcion es utiliza al final de cada registro,modificacion y eliminacion se ocupa para guardar la informacion
    //de los cambios en la bitacora
    //recibe como parametros la conexion a la base de datos, y un string el cual describe la accion realizada
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
                echo '<script>swal("Por Favor intente mas tarde", "Favor revisar los datos e intentar nuevamente", "error");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }
    ///esta funcion es utilizada para obtener el numero de administradores registrados en la base de datos
    //como unico parametro recibe la conexion a la base de datos 
    public static function numero_administradores($conexion) {
        $total = null;

        if (isset($conexion)) {
            try {
                //echo 'hay conexion';
                $sql = "SELECT count(*) as total FROM  administradores"; ///estos son alias para que PDO pueda trabajar 
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

    ///esta funcion es eutilizada desde el index, para verificar si la pass introducida es correcta
    public static function verificar_pass($conexion, $verificacion) {
        $respuesta = false;
        ///obtenemos los datos del administrador que coincida con los datos introducidos
        $administrador_actual = self:: obtener_administrador_actual($conexion, $_SESSION['user']);

        if (isset($conexion)) {
            try {
                
                //verificamos si la pass es correcta
                if (password_verify($verificacion, $administrador_actual->getPasword())) {///esto es para saber si las contrase;a para modificar es correcta
                    $respuesta = true;
                } else {
                    $respuesta = false;
                }
            } catch (PDOException $ex) {
                //echo "<script>swal('Ooops!', 'Hubo no se pudo realizar la accion', 'error');</script>";
                
                ///informamos si encontramos error con la base de datos 
                echo '<script>swal({
                    title: "Error!",
                    text: "Por Favor intente más tarde",
                    type: "error",
                    confirmButtonText: "ok",
                    closeOnConfirm: false
                },
                function () {
                    location.href="inicio_seguridad.php";
                    
                });</script>';

                print 'ERROR: ' . $ex->getMessage();
            }
        } else {
            echo "no hay conexion";
        }
        return $respuesta;
    }
    //esta funcion es utilizada desde la vista eliminar_administrador que se encuentra en la carpeta seguridad
    //es utilizada para trasladar los activos de un administrador que se eliminara, hacia uno que este activo
    public static function actualizar_activos_administradir($conexion, $codigo_administrador1, $codigo_administrador2) {
        $clave_actualizada = false;
        if (isset($conexion)) {
            try {
                $sql = "UPDATE actvos SET codigo_administrador = '$codigo_administrador2' WHERE actvos.codigo_administrador = '$codigo_administrador1';";
                $sentencia = $conexion->prepare($sql);
                $clave_actualizada = $sentencia->execute();
            } catch (PDOException $exc) {
                echo $exc->getTraceAsString();
            }
        }
        //prepgaramos el registro para la bitacora lo lo enviamos
        $mensaje = 'Los activos de el administrador ' . $codigo_administrador1 . " fueron transferidos a " . $codigo_administrador2;
        self::insertar_bitacora($conexion, $mensaje);

        return $clave_actualizada;
    }

    ///esta funcion es utilizada por la funcion registro de administrador, verifica si el dui ingresado 
    //ya se encuentra registrado en la base de datos, recibe como parametros la conexion a la base de datos 
    // y el dui introducido
    public static function verifica_dui($conexion, $dui) {
        $administrador = new Administrador();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM administradores WHERE dui='$dui'"; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {

                    $administrador->setDui($row["dui"]);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $administrador;
    }

}

?>