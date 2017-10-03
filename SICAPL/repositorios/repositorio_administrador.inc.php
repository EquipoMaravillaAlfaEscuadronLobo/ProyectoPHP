<?php

class Repositorio_administrador {

    public static function insertar_administrador($conexion , $administrador) {
        $administrador_insertado = false;
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
                
                
                $sql = 'INSERT INTO administradores(codigo_administrador,pasword,nivel,nombre,apellido,sexo,dui,estado,observacion,foto)'
                        . ' values (:codigo_administrador,:pasword,:nivel,:nombre,:apellido,:sexo,:dui,:estado,:observacion,:foto)';
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
                $sentencia->bindParam(':foto', $observacion, PDO::PARAM_STR);
                                             
                
                $administrador_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $administrador_insertado;
    }

    public static function obtener_administrador($conexion , $codigo_administrador) {
        $administrador=new Administrador();
        
        

        if (isset($conexion)) {
            try {
                
                
                
                
                $sql = "SELECT * FROM administradores WHERE codigo_administrador='$codigo_administrador' or email='$codigo_administrador'";///estos son alias para que PDO pueda trabajar 
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

}

?>