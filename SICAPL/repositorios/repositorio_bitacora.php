<?php

class Repositorio_Bitacora {

 
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