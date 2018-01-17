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
    
}

?>