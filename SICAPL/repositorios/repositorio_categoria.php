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
                echo "<option selected>Selecciona:</option>"; 
                foreach ($conexion->query($sql) as $row) {
                   echo"<option value='".$row["codigo_tipo"]."'>".$row["nombre"]."</option>"; 
                   echo '<script language="javascript">alert("'.$row["nombre"].'");</script>'; 
                }
                
                
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

     public static function lista_categorias($conexion) {
        $lista_categorias[] = array();;

        if (isset($conexion)) {
            try {
                $sql = "select * from categoria";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                             
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $categoria = new Categoria();
                        $categoria->setCodigo_tipo($fila['codigo_tipo']);
                        
                        $categoria->setNombre($fila['nombre']);
                        

                        $lista_categorias[] = $categoria;
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
        
        
        return   $lista_categorias;
    }

}

?>