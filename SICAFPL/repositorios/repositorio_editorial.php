<?php

/**
 * 
 */
class Repositorio_editorial {
    //metodo que inserta las editoriales
    public static function insertarEditorial($conexion, $editorial) {
        $editorial_insertada = false;
        if (isset($conexion)) {
            try {
        $nombre = $editorial->getNombre();

                $direccion = $editorial->getdireccion();
                $email = $editorial->getemail();
                $telefono = $editorial->gettelefono();

                $sql = 'INSERT INTO editoriales(nombre,direccion,email,telefono)'
                        . ' values (:nombre,:direccion,:email,:telefono)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);

                $editorial_insertada = $sentencia->execute();
                $accion = 'Se registró a la editorial ' .$nombre;
                self::insertar_bitacora($conexion, $accion);
                
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $editorial_insertada;
    }
    //metodo que obtiene la ultima editorial insertada
    public function ObtenerUltimo($conexion) {
        $ultimo = 1;
        if (isset($conexion)) {
            try {
                $sql = "SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'diseno1' AND TABLE_NAME = 'editoriales'";

                foreach ($conexion->query($sql) as $row) {
                    $ultimo = $row[0];
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $ultimo;
    }
    //metodo que retorna la lista de las editoriales
    public function ListaEditorial($conexion) {
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "Select * from editoriales";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }
    //metodo que edita los datos de una editorial
    public static function editarEditorial($conexion, $editorial) {
        $editorial_insertada = false;
        if (isset($conexion)) {
            try {

                $nombre = $editorial->getNombre();
                $codigo = $editorial->getCodigo_editorial();
                $direccion = $editorial->getDireccion();
                $email = $editorial->getEmail();
                $telefono = $editorial->getTelefono();

                $sql = 'UPDATE editoriales SET nombre=:nombre, email=:email, telefono=:telefono, direccion=:direccion where codigo_editorial=:codigo';

                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':codigo', $codigo, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $sentencia->bindParam(':email', $email, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo', $codigo, PDO::PARAM_STR);

                $editorial_insertada = $sentencia->execute();
                $accion = 'se actualizaron los datos de editorial ' . $nombre . " dirección actual ". $direccion .", email " .$email . ", telefono " .$telefono;;
                self::insertar_bitacora($conexion, $accion);
                
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $editorial_insertada;
    }
    
    static function insertar_bitacora($conexion, $accion) {
        $administrador_insertado = false;
        if (isset($conexion)) {
            try {
                session_start() ;
                $administrador = $_SESSION['user'];
                ini_set('date.timezone', 'America/El_Salvador');
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