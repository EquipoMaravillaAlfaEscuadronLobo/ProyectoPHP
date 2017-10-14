<?php

class Repositorio_encargado {

    public static function insertar_encargado($conexion, $encargado) {
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

                $sentencia->bindParam(':codigo_enc', $codigo_enc, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_STR);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                $sentencia->bindParam(':correo', $correo, PDO::PARAM_STR);

              $encargado_insertado = $sentencia->execute();
             
                
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Revise los datos ingresados  ", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $encargado_insertado;
    }
   
    public static function obtener_encargado($conexion, $codigo_encargado) {
        $encargado = new Encargado_mantenimiento();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM encargado_mantenimiento WHERE codigo_emantenimiento='$codigo_encargado' "; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                    //$encargado->setCodigo_emantenimiento($row["codigo_emantenimiento"]);
                    $encargado->setNombre($row["nombre"]);
                    $encargado->setTelefono($row["telefono"]);
                    $encargado->setCorreo($row["correo"]);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $encargado;
    }
    
    public static function lista_encargado($conexion) {
         $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from encargado_mantenimiento";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }

}
?>