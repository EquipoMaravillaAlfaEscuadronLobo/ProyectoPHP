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

                echo $codigo_cat .'jjj';
                $categoria_insertada = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $categoria_insertada;
    }

    public static function obtener_administrador($conexion, $codigo_categoria) {
        $categoria = new Categoria();



        if (isset($conexion)) {
            try {




                $sql = "SELECT * FROM categoria WHERE codigo_tipo='$codigo_categoria' "; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                    $administrador->setCodigo_categoria($row["codigo_tipo"]);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $administrador;
    }

}

?>