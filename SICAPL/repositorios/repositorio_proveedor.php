<?php

class Repositorio_proveedor {

    public static function insertar_proveedor($conexion, $proveedor) {
        $proveedor_insertado = false;
        if (isset($conexion)) {
            try {
                
                $codigo_proveedor = $proveedor->getCodigo_proveedor();
                $nombre = $proveedor->getNombre();
                $direccion = $proveedor->getDireccion();
                $telefono = $proveedor->getTelefono();
                $correo = $proveedor->getCorreo();
                $fax = $proveedor->getFax();

                $sql = 'INSERT INTO proveedores(codigo_proveedor,nombre,direccion, telefono, correo, fax)'
                        . ' values (:codigo_proveedor,:nombre, :direccion, :telefono,:correo,  :fax)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam('codigo_proveedor', $codigo_proveedor, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_BOOL);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                $sentencia->bindParam(':correo', $correo, PDO::PARAM_STR);
                $sentencia->bindParam(':fax', $fax, PDO::PARAM_STR);

              $proveedor_insertado = $sentencia->execute();
              $accion = 'se registro al siguiente proveedor:' . $nombre . ", con dirección " . $direccion . " y teléfono ". $telefono ;
              self::insertar_bitacora($conexion, $accion);
                
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "El nombre de Usuario que usted ha ingresado no está disponible,por favor ingrese otro", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $proveedor_insertado;
    }
    /*
     public static function obtener_codigo($conexion) {
      if (isset($conexion)) {
            try {
                $sql = "SELECT COUNT(proveedores.codigo_proveedor) FROM proveedores "; ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->query($sql) ;
                
                return $sentencia+1;
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return 000;
     }
   */
   
    public static function lista_proveedores($conexion) {
        $lista_proveedores = array();
        if (isset($conexion)) {
            try {
                $sql = "SELECT proveedores.codigo_proveedor,proveedores.nombre FROM   proveedores";
                $sentencia = $conexion->prepare($sql);
                $sentencia->execute();
                $resultado = $sentencia->fetchAll();
                if (count($resultado)) {
                    foreach ($resultado as $fila) {
                        $proveedor = new Proveedor();
                        $proveedor->setCodigo_proveedor($fila['codigo_proveedor']);
                        $proveedor->setNombre($fila['nombre']);
                      //  $proveedor->setDireccion($fila['direccion']);
                       // $proveedor->setTelefono($fila['telefono']);
                       // $proveedor->setCorreo($fila['correo']);
                       // $proveedor->setFax($fila['fax']);

                        $lista_proveedores[] = $proveedor;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista_proveedores;
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