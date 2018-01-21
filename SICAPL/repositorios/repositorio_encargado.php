<?php

class Repositorio_encargado {

    public static function insertar_encargado($conexion, $encargado) {//inserta nuevo encarado a la base de datos
        $encargado_insertado = false;
       
        if (isset($conexion)) {
            try {
               
                $codigo_enc = $encargado->getCodigo_emantenimiento();
                $nombre = $encargado->getNombre();
                $direccion = $encargado->getDirecccion();
                $telefono = $encargado->getTelefono();
                $correo = $encargado->getCorreo();
               

                $sql = 'INSERT INTO encargado_mantenimiento (codigo_emantenimiento,nombre,direccion, telefono, correo)'
                        . ' values (:codigo_enc,:nombre, :direccion, :telefono,:correo)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
///estos son alias para que PDO pueda trabajar 
                $sentencia->bindParam(':codigo_enc', $codigo_enc, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                $sentencia->bindParam(':correo', $correo, PDO::PARAM_STR);

              $encargado_insertado = $sentencia->execute();
             $accion = 'Se registró al siguiente encargado de mantenimiento: ' . $nombre . ", con direccion ". $direccion . ", telefono ". $telefono.", y correo ".$correo ;
           
             
             self::insertar_bitacora($conexion, $accion);
                
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Revise los datos ingresados  ", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $encargado_insertado;
    }
   
    public static function obtener_encargado($conexion, $codigo_encargado) {
//obtiene datos de encargado segun el $codigo_encargado
        $encargado = new Encargado_mantenimiento();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM encargado_mantenimiento WHERE codigo_emantenimiento='$codigo_encargado' "; 
                foreach ($conexion->query($sql) as $row) {
                    $encargado->setCodigo_emantenimiento($row["codigo_emantenimiento"]);
                    $encargado->setNombre($row["nombre"]);
                    $encargado->setTelefono($row["telefono"]);
                    $encargado->setCorreo($row["correo"]);
                    $encargado->setDirecccion($row["direccion"]);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $encargado;//retonamos los datos
    }
    
    public static function lista_encargado($conexion) {//lista con los datos de los encargados
         $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
encargado_mantenimiento.codigo_emantenimiento AS cod,
encargado_mantenimiento.nombre AS nombre,
encargado_mantenimiento.telefono AS tel,
encargado_mantenimiento.correo as correo,
encargado_mantenimiento.direccion as dir
from encargado_mantenimiento
";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }
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

                echo 'la bitacora ha sido guardada';
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }
    
}


?>