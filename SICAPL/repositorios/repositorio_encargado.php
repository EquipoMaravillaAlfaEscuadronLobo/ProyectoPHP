<?php

class Repositorio_encargado {

    public static function insertar_encargado($conexion, $encargado) {
        $encargado_insertado = false;
        if (isset($conexion)) {
            try {
                $encargado = new Encargado_mantenimiento();
                $codigo_enc = $encargado->getCodigo_emantenimiento;
                $nombre = $encargado->getNombre();
                $direccion = $encargado->getDireccion();
                $telefono = $encargado->getTelefono();
                $correo = $encargado->getCorreo();
               

                $sql = 'INSERT INTO proveedores(codigo_emantenimiento,nombre,direccion, telefono, correo)'
                        . ' values (:codigo_enc,:nombre, :direccion, :telefono,:correo)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);

                $sentencia->bindParam('codigo_emantenimiento', $codigo_proveedor, PDO::PARAM_STR);
                $sentencia->bindParam(':nombre', $nombre, PDO::PARAM_STR);
                $sentencia->bindParam(':direccion', $direccion, PDO::PARAM_BOOL);
                $sentencia->bindParam(':telefono', $telefono, PDO::PARAM_STR);
                $sentencia->bindParam(':correo', $correo, PDO::PARAM_STR);

              $encargado_insertado = $sentencia->execute();

                
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "El nombre de Usuario que usted ha ingresado no está disponible,por favor ingrese otro", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $encargado_insertado;
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
    /*
    public static function lista_proveedores($conexion) {
        $lista_proveedores = [];
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
                        $proveedor->setDireccion($fila['direccion']);
                        $proveedor->setTelefono($fila['telefono']);
                        $proveedor->setCorreo($fila['correo']);
                        $proveedor->setFax($fila['fax']);

                        $lista_proveedores[] = $proveedor;
                    }
                }
            } catch (PDOException $exc) {
                print('ERROR' . $exc->getMessage());
            }
        }
        return $lista_proveedores;
    }
*/
}

?>