<?php

class Repositorio_administrador {

    public static function insertar_administrador($conexion, $administrador) {
        $administrador_insertado = false;
        //$administrador = new Administrador();
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
                
                $sql = 'INSERT INTO administradores(codigo_administrador,pasword,nivel,nombre,apellido,sexo,dui,estado,observacion,foto,email)'
                        . ' values (:codigo_administrador,:pasword,:nivel,:nombre,:apellido,:sexo,:dui,:estado,:observacion,:foto,:email)';
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

                $administrador_insertado = $sentencia->execute();
                
                echo '<script>swal("Muy Bien!", "Lo haz logrado", "success");</script>';
                
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "El nombre de Usuario que usted ha ingresado no está disponible,por favor ingrese otro", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $administrador_insertado;
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

}

?>