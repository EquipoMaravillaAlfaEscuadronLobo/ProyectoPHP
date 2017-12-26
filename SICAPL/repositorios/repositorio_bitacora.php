<?php

class Repositorio_Bitacora {

 
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
                echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function lista_bitacora($conexion) {
        $lista_bitacora = array();

        if (isset($conexion)) {
            try {
                $sql = "SELECT * FROM bitacora ORDER by codigo_bitacora DESC";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $bitacora = new Bitacora();
                        $bitacora ->setCodigo_bitacora($fila['codigo_bitacora']);
                        //$nombre = self::nombre_administrador($conexion, $fila['codigo_administrador']);
                        $bitacora ->setCodigo_administrador($fila['codigo_administrador']);
                        $bitacora ->setAccion($fila['accion']);
                        $bitacora ->setFecha($fila['fecha']);

                        $lista_bitacora[] = $bitacora;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista_bitacora;
    }
    
    public static function nombre_administrador($conexion, $codigo) {
        $nombre= "";
        if (isset($conexion)) {
            try {
                $sql = "select * from administradores where (codigo_administrador != '$codigo'  AND estado = 1)";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $nombre = ($fila['nombre']. " ". $fila['apellido']);
                         
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $nombre;
    }
    
    public static function nombre_usuario($conexion, $codigo) {
        $nombre= "";
        if (isset($conexion)) {
            try {
                $sql = "select * from usuarios where (codigo_usuario = '$codigo')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $nombre = ($fila['nombre']. " ". $fila['apellido']);
                         
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $nombre;
    }
    
    public static function codigo_usuario_por_codigo_prestamo($conexion, $codigo) {
        $nombre= "";
        if (isset($conexion)) {
            try {
                $sql = "select * from prestamo_libros where (codigo_plibro = '$codigo')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $nombre = ($fila['codigo_usuario']);
                         
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $nombre;
    }
    
    public static function nombre_libro($conexion, $codigo) {
        $nombre= "";
        if (isset($conexion)) {
            try {
                $sql = "select * from libros where (codigo_libro = '$codigo')";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $nombre = ($fila['titulo']);
                         
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $nombre;
    }
   
    public static function nombre_de_administrador($conexion, $codigo) {
        $nombre = '';
        if (isset($conexion)) {
            try {
                $sql = "select * from administradores where (codigo_administrador = '$codigo')";
               // echo $sql;      
                    $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $nombre = ($fila['nombre']);
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $nombre;
    }
    
    
    
}



?>