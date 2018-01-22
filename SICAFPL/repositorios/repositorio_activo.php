<?php

class Repositorio_activo {

    public static function insertar_activo($conexion, $activo) {//funcion para insertar activos a la base de datos
        //recibe la conexion y un objeto tipo activo que contiene los datos a registrar
        $activo_insertado = false;
        if (isset($conexion)) {//comprueba que la conexion esta abierta
            try {
                //asignamos los datos a nuevas variables para tener mas orden
                $codigo_activo = $activo->getCodigo_activo();
                $codigo_tipo = $activo->getCodigo_tipo();
                $codigo_proveedor = $activo->getCodigo_proveedor();
                $codigo_detalle = $activo->getCodigo_detalle();
                $codigo_administrador = $activo->getCodigo_administrador();
                $estado = $activo->getEstado();
                $observacion = "";
                $foto = $activo->getFoto();
                $fecha = $activo->getFecha_adquicision();
                $precio = $activo->getPrecio();
                // finaliza la asignacin

                //sentencia que se ejecuta para ingresar activo a la base
                $sql = 'INSERT INTO actvos(codigo_activo,codigo_tipo, codigo_proveedor, codigo_detalle, codigo_administrador, fecha_adquicision, precio, estado, foto, observacion )'
                        . ' values (:codigo_activo,:codigo_tipo, :codigo_proveedor , :codigo_detalle, :codigo_administrador, :fecha, :precio, :estado, :foto , :observacion )';
                
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':codigo_activo', $codigo_activo, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo_tipo', $codigo_tipo, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo_proveedor', $codigo_proveedor, PDO::PARAM_STR);
                $sentencia->bindParam(':codigo_detalle', $codigo_detalle, PDO::PARAM_INT);
                $sentencia->bindParam(':codigo_administrador', $codigo_administrador, PDO::PARAM_INT);
                $sentencia->bindParam(':fecha', $fecha, PDO::PARAM_STR);
                $sentencia->bindParam(':precio', $precio, PDO::PARAM_STR);
                $sentencia->bindParam(':estado', $estado, PDO::PARAM_INT);
                $sentencia->bindParam(':observacion', $observacion, PDO::PARAM_STR);
                $sentencia->bindParam(':foto', $foto, PDO::PARAM_STR);

                $activo_insertado = $sentencia->execute();// si tuvo exito la ejecucion del sql $activo_insertado sera true
                
            } catch (PDOException $ex) {// en caso de error en ejecutar el sql muestra el siguiente mensaje
                echo '<script>swal("No se puedo realizar el registro acivo", "Favor revisar los datos e intentar nuevamente' . $ex->getMessage() . '", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function lista_activo($conexion) {//funcion para recuperar y mostrar todos lo activos de la base de datos
    // en la ventana inventario
        $resultado = "";//aqui se guardan tosos los datos
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from actvos  ORDER BY actvos.codigo_activo ASC";
                $resultado = $conexion->query($sql);//se asigna todos los datos a la variable
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;//se envia una lista con todos los activos que es recorrida mediante un foreach
    }
    
    public static function lista_activo_codBarra($conexion) {//para listar activos en el reporte codigos de barra - activos
        $resultado = "";//aqui se guardan tosos los datos
        if (isset($conexion)) {
            try {
                $sql = "SELECT
actvos.codigo_activo ,
actvos.codigo_tipo as cod,
categoria.nombre as tipo
FROM
actvos
INNER JOIN categoria ON actvos.codigo_tipo = categoria.codigo_tipo
GROUP BY
actvos.codigo_tipo";
                $resultado = $conexion->query($sql);//se asigna todos los datos a la variable
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;// envia la lista con todos los activos que es recorrida mediante un foreach
    }
    
    public static function lista_activo_tipo($conexion, $tipo) {//retorna la lista de activos de un tipo en especifico
        //recibe la conexion y el codigo tipo de activo para filtrar
        $resultado = "";//aqui se guardan tosos los datos
        if (isset($conexion)) {
            try {
                $sql = "SELECT
actvos.codigo_activo as cod
FROM
actvos
WHERE
actvos.codigo_tipo ='$tipo' AND
actvos.estado = 1";
                $resultado = $conexion->query($sql);//se asigna todos los datos a la variable
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;// envia la lista con todos los activos que es recorrida mediante un foreach
    }
    
    public static function lista_activo_inventario($conexion, $cual) {
//lista activos para las consultas inventario, activos dañados y extraviados
        //si la vaiable $cual esta vacia ejecuta normal el sql 
        $resultado = "";
        if($cual=="3"){//si $cual = 3 filtra solamente los actios dañados
            $cual='WHERE actvos.estado = 3';
        }
        if($cual=="4"){//si $cual = 4 filtra solamente los actios extraviados
            $cual='WHERE actvos.estado = 4';
        }
        if (isset($conexion)) {
            try {
                $sql = "SELECT
categoria.nombre as tipo,
actvos.codigo_activo as cod,
CONCAT(proveedores.nombre,' ') as proveedor,
CONCAT(administradores.nombre,' ',administradores.apellido) as admin,
actvos.estado as e,
actvos.precio as p,
actvos.fecha_adquicision as f,
actvos.observacion as o
FROM
actvos
INNER JOIN categoria ON actvos.codigo_tipo = categoria.codigo_tipo
INNER JOIN administradores ON actvos.codigo_administrador = administradores.codigo_administrador
INNER JOIN proveedores ON actvos.codigo_proveedor = proveedores.codigo_proveedor
$cual
";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;//enviamos la lista
    }
    
    public static function lista_activo_mas($conexion) {//retorna lista de activos mas prestados
        $resultado = "";
        
        if (isset($conexion)) {
            try {
                $sql = "SELECT
prestamo_activos.codigo_pactivo,
actvos.codigo_activo as cod,
categoria.nombre as tipo,
(select count(*) from movimiento_actvos  where movimiento_actvos.codigo_activo =cod) as veces
FROM
prestamo_activos
INNER JOIN movimiento_actvos ON movimiento_actvos.codigo_pactivo = prestamo_activos.codigo_pactivo
INNER JOIN actvos ON movimiento_actvos.codigo_activo = actvos.codigo_activo
INNER JOIN categoria ON actvos.codigo_tipo = categoria.codigo_tipo
GROUP BY
cod 
ORDER BY
veces desc
";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;//envimos la lista
    }
    
    public static function lista_activo_baja($conexion) {//retorna los activos dados de baja
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
categoria.nombre AS tipo,
actvos.codigo_activo AS codigo,
actvos.precio AS p,
actvos.estado AS e,
actvos.observacion AS o,
(CONCAT(administradores.nombre,' ',administradores.apellido)) as nombre,
actvos.fecha_adquicision as f

FROM
actvos
INNER JOIN categoria ON actvos.codigo_tipo = categoria.codigo_tipo
INNER JOIN administradores ON actvos.codigo_administrador = administradores.codigo_administrador
WHERE
actvos.estado = 0
";// el estado 0 es de los actios dado de baja
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;//anviamos la lista
    }

    public static function lista_activo2($conexion) {//retorna la lista de activos disponibles para prestar
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from actvos where estado='1' ORDER BY actvos.codigo_activo ASC";
                // estado 1 es disponible
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;//enviamos la lista
    }
    
    public static function lista_activo_mantenimiento($conexion) {//lista los activos disponibles y los dañados.
        //se utiliza en el buscador para agragar activos a la tabla de mantenimiento
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from actvos where actvos.estado = 1 or actvos.estado = 3  ORDER BY actvos.codigo_activo ASC";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;//enviamos la lista
    }
    
     public static function lista_activo_mantenimiento2($conexion) {//retorna los activos dañados a la seccion de mantenimineto
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from actvos where actvos.estado = 3  ORDER BY actvos.codigo_activo ASC";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;//enviamos la lista
    }

    public static function lista_activo3($conexion, $cant) {//lista los activos disponibes para prestar
        //utilizada en el buscador para agregar activos a la tabla de prestamo
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT
                    actvos.codigo_activo
                    FROM
                    actvos
                    WHERE
                    actvos.estado = 1

                    LIMIT '$cant'";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;//enviamos la lista
    }

    public static function actualizar_activo($conexion, $activo, $codigo_original) {//funcion para modificar los dats de un activo
        $activo_insertado = false;

        if (isset($conexion)) {
            try {
                //los datos que se modifican son el encargado del activo y la foto
                $codigo_administrador = $activo->getCodigo_administrador();
                $foto = $activo->getFoto();
               
                if($foto != ""){//si el campo foto no esta vacio se actualizan codigo del adminstrador a cargo del activo y la foto
                $sql = "UPDATE  actvos set codigo_administrador='$codigo_administrador' ,foto = '$foto' where codigo_activo='$codigo_original'";
                }else{//el campo foto  esta vacio solo se actualiza el  codigo del administrador
                $sql = "UPDATE  actvos set codigo_administrador='$codigo_administrador'  where codigo_activo='$codigo_original'";
}
                $sentencia = $conexion->prepare($sql);                
                $activo_insertado = $sentencia->execute();
                
                $accion = "Se  actualizaron los datos del activo " . $codigo_original;
                //variable &accion se envia a la bitacora del sistema
                self::insertar_bitacora($conexion, $accion);//insertamos en la bitacora
                
            } catch (PDOException $ex) {
                echo "<script>swal('Excelente!', 'hubo pedo '$sql' ', 'success');</script>";

                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function obtener_activo($conexion, $codigo) {//obtenemos todos ls datos de un activo segun el codigo recibido
        $resultado = "";
        if (isset($conexion)) {
            try {
                $sql = "SELECT * from actvos  where codigo_activo='$codigo'";
                $resultado = $conexion->query($sql);
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $resultado;
    }

    public static function obtener_estadoActivo($conexion, $cod) {//obtenermos el estado del activo segun el codigo

        if (isset($conexion)) {
            try {

                $sql = "SELECT
                actvos.estado
                FROM
                actvos
                WHERE
                actvos.codigo_activo = '$cod'"; 
                foreach ($conexion->query($sql) as $row) {
                    $r = $row[0];
                }
                return $r;
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }
    
     public static function obtener_nactivo($conexion, $cod) {//se obtiene el numero de activos que estan registrado segun el tipo

        if (isset($conexion)) {
            try {

                $sql = "SELECT
                        COUNT( actvos.codigo_tipo)
                        FROM
                        actvos
                        WHERE
                        actvos.codigo_tipo = '$cod'";//filtra para tener solo de un tipoS 
                foreach ($conexion->query($sql) as $row) {
                    $r = $row[0];
                }
                return $r;
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
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

//                echo 'la bitacora ha sido guardada';
            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }
    
    
}



?>