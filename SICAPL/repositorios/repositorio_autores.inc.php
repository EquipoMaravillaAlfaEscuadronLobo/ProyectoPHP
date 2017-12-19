<?php

/**
 * 
 */
class Repositorio_autores {

    public static function insertarAutor($conexion, $autor) {
        $autor_insertado = false;
        if (isset($conexion)) {
            try {

                $nombre = $autor->getNombre();

                $apellido = $autor->getApellido();
                $nacimiento = $autor->getNacimiento();
                $biografia = $autor->getBiografia();


                $sql = 'INSERT INTO autores(nombre,apellido,nacimiento,biografia)'
                        . ' values (:nombre,:apellido,:nacimiento,:biografia)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $sentencia->bindParam(':nacimiento', $nacimiento, PDO::PARAM_STR);
                $sentencia->bindParam(':biografia', $biografia, PDO::PARAM_STR);
                $autor_insertado = $sentencia->execute();
                
                $accion = "se registro al autor " .$nombre . " " . $apellido;
                self::insertar_bitacora($conexion, $accion);
                
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $autor_insertado;
    }

    public function ObtenerUltimo($conexion) {
        $ultimo = 1;
        if (isset($conexion)) {
            try {
                $sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'diseno1' AND TABLE_NAME = 'autores'";

                foreach ($conexion->query($sql) as $row) {
                    $ultimo = $row[0];
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $ultimo;
    }

    public function ListaAutores($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "Select * from autores";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }

    public static function editarAutor($conexion, $autor) {
        $autor_insertado = false;
        if (isset($conexion)) {
            try {



                $nombre = $autor->getNombre();
                $codigo = $autor->getCodigo();
                $apellido = $autor->getApellido();
                $nacimiento = $autor->getNacimiento();
                $biografia = $autor->getBiografia();


                $sql = 'UPDATE autores SET nombre=:nombre, apellido=:apellido, nacimiento=:nacimiento, biografia=:biografia where  codigo_autor=:codigo';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);




                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':apellido', $apellido, PDO::PARAM_STR);
                $sentencia->bindParam(':nacimiento', $nacimiento, PDO::PARAM_STR);
                $sentencia->bindParam(':biografia', $biografia, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo', $codigo, PDO::PARAM_STR);


                $autor_insertado = $sentencia->execute();
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $autor_insertado;
    }
     static function insertar_bitacora($conexion, $accion) {
        $administrador_insertado = false;
        if (isset($conexion)) {
            try {
                $administrador = 'admin01';
                sini_set('date.timezone', 'America/El_Salvador');
                $hora = date("Y/m/d ") . date("h:i:s");

                $sql = "INSERT INTO bitacora (codigo_administrador, accion, fecha) VALUES ('$administrador', '$accion', '$hora');";

                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $administrador_insertado = $sentencia->execute();

//                echo 'la bitacora ha sido guardada';
            } catch (PDOException $ex) {
                //echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }
    

}

?>