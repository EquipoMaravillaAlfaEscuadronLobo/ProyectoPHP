<?php

class RepositorioUsuario {

    public static function obtener_todos($conexion) {
        $usuarios = array();
        if (isset($conexion)) {
            try {
                include_once './Usuario.inc.php';
                $sql = 'select * from usuarios';
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();

                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $usuarios[] = new Usuario($fila['id'], $fila['nombre'], $fila['email'], $fila['password'], $fila['fecha_registro'], $fila['activo']);
                    }
                } else {
                    print 'NO HAY RESULTADOS';
                }
            } catch (PDOException $ex) {
                print 'error ' . $ex->getMessage();
            }
        }
        return $usuarios;
    }

    public static function obtener_numero_usuarios($conexion) {
        $total_usuarios = null;
        if (isset($conexion)) {
            try {
              $sql = 'select count(*) as total from usuarios';
                $sentencia = $conexion -> prepare($sql);
                $sentencia -> execute();
                $resultado = $sentencia -> fetch();
                
                $total_usuarios = $resultado['total'];
            } catch (PDOException $ex) {
                print 'Error '. $ex -> getMessage();
            }
        }
    }
    public static function insertar_usuario($conexion,$Usuario) {
        $usuario_insertado = false ;
        if (isset($conexion)) {
            try {
            $sql = 'INSERT INTO usuarios(nombre,email,password,fecha_registro,activo) values (:nombre,:email,:password,NOW(),0)';    
            $sentencia = $conexion -> prepare($sql);
           $sentencia->bindParam(':nombre', $Usuario->obtener_nombre(),PDO::PARAM_STR);
           $sentencia->bindParam(':email', $Usuario->obtener_email(),PDO::PARAM_STR);
           $sentencia->bindParam(':password', $Usuario->obtener_password(),PDO::PARAM_STR);
          $usuario_insertado = $sentencia->execute();
     
            } catch (PDOException $ex) {
                print 'ERROR: '. $ex->getMessage();    
            }
        }
        return $usuario_insertado;
    }
}
?>

