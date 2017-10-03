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
                
                
                $sql = 'INSERT INTO administradores(codigo_administrador,pasword,nivel,nombre,apellido,sexo,dui,estado,observacion)'
                        . ' values (:codigo_administrador,:pasword,:nivel,:nombre,:apellido,:sexo,:dui,:estado,:observacion)';///estos son alias para que PDO pueda trabajar 
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
                                             
                
                $administrador_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $administrador_insertado;
    }

}

?>