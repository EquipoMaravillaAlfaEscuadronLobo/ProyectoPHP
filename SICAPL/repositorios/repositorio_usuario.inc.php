<?php
class Repositorio_usuario{
    public static function insertar_usuario($conexion, $usuario) {
        echo 'insertar usuario<br>';
        $usuario_insertado = false;
       $usuario = new Usuario();
        if (isset($conexion)) {
            echo 'hay conexion<br>';
            try {
                $numero = self::numero_de_usuarios($conexion);
                echo $numero + 1;
                  
//
//                $codigo_administrador = $usuario->getCodigo_administrador();
//                $pasword = $usuario->getPasword();
//                $nivel = $usuario->getNivel();
//                $nombre = $usuario->getNombre();
//                $apellido = $usuario->getApellido();
//                $sexo = $usuario->getSexo();
//                $dui = $usuario->getDui();
//                $estado = $usuario->getEstado();
//                $observacion = $usuario->getObservacion();
//                $foto = $usuario->getFoto();
//                $email = $usuario->getEmail();
//                $fecha = $usuario->getFecha();
//
//                $administradorExistente = self::obtener_administrador($conexion, $codigo_administrador);
//                if ($administradorExistente->getCodigo_administrador() == "") {
//
//                    $sql = 'INSERT INTO administradores(codigo_administrador,pasword,nivel,nombre,apellido,sexo,dui,estado,observacion,foto,email,fecha)'
//                            . ' values (:codigo_administrador,:pasword,:nivel,:nombre,:apellido,:sexo,:dui,:estado,:observacion,:foto,:email,:fecha)';
//                    ///estos son alias para que PDO pueda trabajar 
//                    $sentencia = $conexion->prepare($sql);
//
//                    $sentencia->bindParam(':codigo_administrador', $codigo_administrador, PDO::PARAM_STR);
//                    $sentencia->bindParam(':pasword', $pasword, PDO::PARAM_STR);
//                    $sentencia->bindParam(':nivel', $nivel, PDO::PARAM_INT);
//                    $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
//                    $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
//                    $sentencia->bindParam(':sexo', $sexo, PDO::PARAM_BOOL);
//                    $sentencia->bindParam(':dui', $dui, PDO::PARAM_STR);
//                    $sentencia->bindParam(':estado', $estado, PDO::PARAM_STR);
//                    $sentencia->bindParam(':observacion', $observacion, PDO::PARAM_STR);
//                    $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
//                    $sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);
//                    $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);
//
//                    $usuario_insertado = $sentencia->execute();
//
//                    echo '<script>swal("Excelente!", "Registro guardado con exito", "success");</script>';
//                } else {
//                    echo '<script>'
//                    . 'swal("Advetencia!", "El nombre de usuario que introdujo ya esta en uso, favor introdusca otro", "warning");'
//                    . '$("#idNombre").val("' . $nombre . '"); $("#idApellido").val("' . $apellido . '");'
//                    . '$("#idUser").val("' . $codigo_administrador . '"); $("#idDui").val("' . $dui . '");'
//                    . '$("#idFecha").val("' . $fecha . '"); $("#idEmail").val("' . $email . '");'
//                    . 'if ("' . $nivel . '" == "0") {$("#idRoot").attr("checked", "checked");} else {$("#idAdministrador").attr("checked", "checked");}'
//                    . 'if ("' . $sexo . '" == "Masculino") {$("#idHombre").attr("checked", "checked");} else {$("#idMujer").attr("checked", "checked");}'
//                    . '$("#idListarAdmnistrador").removeClass("active");  $("#idRegistroAdministrador").addClass("active"); '
//                    . '$("#idPass1").val("'.$pasword.'"); $("#idPass2").val("'.$pasword.'");  </script>';
//                }
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }else{
            echo 'no hay conexion';
        }
    }
    public static function numero_de_usuarios($conexion){
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
    
}

?>