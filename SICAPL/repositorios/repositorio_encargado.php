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
   

}
?>