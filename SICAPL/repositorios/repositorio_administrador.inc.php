<?php

class Repositorio_administrador {

    public static function insertar_administrador($conexion, $administrador) {
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
                $estado = $administrador->getEstado();
                $observacion = $administrador->getObservacion();
                $foto = $administrador->getFoto();
                $email = $administrador->getEmail();
                $fecha = $administrador->getFecha();

                $administradorExistente = self::obtener_administrador($conexion, $codigo_administrador);
                if ($administradorExistente->getCodigo_administrador() == "") {

                    $sql = 'INSERT INTO administradores(codigo_administrador,pasword,nivel,nombre,apellido,sexo,dui,estado,observacion,foto,email,fecha)'
                            . ' values (:codigo_administrador,:pasword,:nivel,:nombre,:apellido,:sexo,:dui,:estado,:observacion,:foto,:email,:fecha)';
                    ///estos son alias para que PDO pueda trabajar 
                    $sentencia = $conexion->prepare($sql);

                    $sentencia->bindParam(':codigo_administrador', $codigo_administrador, PDO::PARAM_STR);
                    $sentencia->bindParam(':pasword', $pasword, PDO::PARAM_STR);
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

                    echo '<script>swal("Excelente!", "Registro guardado con exito", "success");</script>';
                } else {
                    echo '<script>'
                    . 'swal("Advetencia!", "El nombre de usuario que introdujo ya esta en uso, favor introdusca otro", "warning");'
                    . '$("#idNombre").val("'.$nombre.'"); $("#idApellido").val("'.$apellido.'");'
                    . '$("#idUser").val("'.$codigo_administrador.'"); $("#idDui").val("'.$dui.'");'
                    . '$("#idFecha").val("'.$fecha.'"); $("#idEmail").val("'.$email.'");'
                    . 'if ("'.$nivel.'" == "0") {$("#idRoot").attr("checked", "checked");} else {$("#idAdministrador").attr("checked", "checked");}'
                    . 'if ("'.$sexo.'" == "Masculino") {$("#idHombre").attr("checked", "checked");} else {$("#idMujer").attr("checked", "checked");}'
                    . '</script>';
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
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $administrador;
    }

    public static function lista_administradores($conexion) {
        $lista_administradores = [];

        if (isset($conexion)) {
            try {
                $sql = "select * from administradores";
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

    public static function actualizar_administrador($conexion, $administrador,$codigo_original) {
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
}
                else{
                   echo "<script>swal('Excelente!', 'hubo pedo '$sql' ', 'success');</script>";
                }
            } catch (PDOException $ex) {
                echo "<script>swal('Excelente!', 'hubo pedo '$sql' ', 'success');</script>";
                
                print 'ERROR: ' . $ex->getMessage();
            }
        }
   }
}

?>