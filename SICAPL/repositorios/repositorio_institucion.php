<?php
class Repositorio_institucion{
     public static function lista_institucion($conexion) {
        $lista_institucion = array();

        if (isset($conexion)) {
            try {
                $sql = "select * from institucion  ";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $institucion = new Institucion();
                        
                        $institucion->setCodigo_institucion($fila['codigo_institucion']);
                        $institucion->setNombre($fila['nombre']);
                        
                        $lista_institucion[] = $institucion;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista_institucion;
    }
    
    public static function usuarios($conexion) {
        $lista_institucion = array();

        if (isset($conexion)) {
            try {
                $sql = "select * from institucion  ";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $institucion = new Institucion();
                        
                        $institucion->setCodigo_institucion($fila['codigo_institucion']);
                        $institucion->setNombre($fila['nombre']);
                        
                        $lista_institucion[] = $institucion;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista_institucion;
    }
    public static function usuario_por_institucion($conexion ,$institucion) {
        $total_usuario = NULL;


        if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(*)as total FROM usuarios where codigo_institucion = '$institucion'";
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
    
}

?>