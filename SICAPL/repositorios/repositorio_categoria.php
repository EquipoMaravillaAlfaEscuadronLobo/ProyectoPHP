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
        if (isset($conexion)) { 
            try {
                $sql="SELECT * FROM categoria";               
                echo "<select name='menu'>\n<option selected>Selecciona:</option>"; 
                foreach ($conexion->query($sql) as $row) {
                   echo"<option value='".$row["codigo_tipo"]."'>".$row["nombre"]."</option>"; 
                   echo '<script language="javascript">alert("'.$row["nombre"].'");</script>'; 
                }
                echo "\n</select>";
                
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return ;
    }
     public static function obtener_categorias2($conexion) {
        if (isset($conexion)) { 
            try {
                $sql="SELECT * FROM categoria"; 
                foreach ($conexion->query($sql) as $row) {
                   echo"<option value='".$row["codigo_tipo"]."'>".$row["nombre"]."</option>"; 
                   //echo '<script language="javascript">alert("paso");</script>'; 
                } 
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return ;
    }

}

?>