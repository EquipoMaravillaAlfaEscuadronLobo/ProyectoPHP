<?php
class Repositorio_institucion{
    
    ///esta funcion es utilizada en la vista registro_usuario, para llenar la lista de las 
    //instituciales a la que puede pertenecer un usuario
    //recibe como parametro la conexion a la base de datos 
    //y retorna la lista de instituciones
     public static function lista_institucion($conexion) {
        $lista_institucion = array();

        if (isset($conexion)) {
            try {
                ///seleccionamos que sean todas las intitucions
                $sql = "select * from institucion  ";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    //recorremos el array de instituciones y guardamos en un objeto tipo institucion
                    foreach ($resultado as $fila) {
                        $institucion = new Institucion();
                        
                        $institucion->setCodigo_institucion($fila['codigo_institucion']);
                        $institucion->setNombre($fila['nombre']);
                        
                        //guardamos los objeto de tipo institucion en un array
                        $lista_institucion[] = $institucion;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista_institucion;
    }
    
    //esta funcion es utilizada en la vista alumnos_institucion se utiliza para cargar los valores que se agregaran
    //a los graficos de dicha vista
    //recibe como parametro la conexion a la base de datos y retorna una lista con el nombre y el codigo de la 
    //institucion
    public static function usuarios($conexion) {
        $lista_institucion = array();

        if (isset($conexion)) {
            try {
                //preparamos y ejecutamos el sql
                $sql = "select * from institucion  ";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();

                if (count($resultado)) {
                    ///recorremos el array 
                    foreach ($resultado as $fila) {
                        $institucion = new Institucion();
                        //guardamos el resultado en un objeto de tipo institucion
                        $institucion->setCodigo_institucion($fila['codigo_institucion']);
                        $institucion->setNombre($fila['nombre']);
                        //guardamos el objeto en un array
                        $lista_institucion[] = $institucion;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista_institucion;
    }
    
    //esta funcion es utilizada en la vista alumnos_institucion se utiliza para cargar todos los datos a la 
    //grafica de alumnos por institucion
    //recibe como parametro la conexion a la base de datos y el codigo de la institucion
    // retorna la cantitdad de usuarios por institucion
    public static function usuario_por_institucion($conexion ,$institucion) {
        $total_usuario = NULL;


        if (isset($conexion)) {
            try {
                ///preparamos el sql y lo ejecutamos 
                $sql = "SELECT COUNT(*)as total FROM usuarios where codigo_institucion = '$institucion'";
                
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetch();
                
                //guardamos el resultado en la variable total usuario
                $total_usuario = $resultado['total'];
            } catch (PDOException $ex) {
                //informamos si hay un error en la ejecucion y luego redirecionamos
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
        ///retornamos el total de usuarios
        return $total_usuario;
    }
    
}

?>