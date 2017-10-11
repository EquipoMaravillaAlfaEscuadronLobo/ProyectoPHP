<?php

class Repositorio_categoria {

    public static function insertar_categoria($conexion, $categoria ) {

        $categoria_insertada = false;
        if (isset($conexion)) {
            try {
                $codigo_cat = $categoria->getCodigo_tipo();
                $nombre = $categoria->getNombre();
                  

                $sql = 'INSERT INTO categoria(codigo_tipo,nombre)'
                        . ' values (:codigo_tipo,:nombre)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':codigo_tipo', $codigo_cat, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);

                
                $categoria_insertada = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $categoria_insertada;
    }

    public static function obtener_categorias($conexion) {
        $categoria = new Categoria();



        if (isset($conexion)) { 
            try {
                $query="SELECT * FROM categoria"; 
                $r=mssql_query($query,$conexion); echo '<script language="javascript">alert("'.$query.'");</script>';   

                 return $r;   
                
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $r;
    }

}

?>