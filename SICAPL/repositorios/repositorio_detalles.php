<?php

class Repositorio_detalle {

    public static function insertar_detalle($conexion, $detalle) {//insertamos detalles de activos a la base de datos
        $detalle_insertado = false;
        if (isset($conexion)) {
            try {
                //asignamos los datos a nuevas variables
                $codigo_detalle = $detalle->getCodigo_detalle();
                $serie = $detalle->getSeri();
                $color = $detalle->getColor();
                $marca = $detalle->getMarca();
                $modelo = $detalle->getModelo();
                $ram = $detalle->getRam();
                $memoria = $detalle->getMemoria();
                $sistema = $detalle->getSistema();
                $dimensiones = $detalle->getDimencione();
                $otros = $detalle->getOtros();
                $proce = $detalle->getProcesador();

                //
                $sql = 'INSERT INTO detalles(codigo_detalle,serie,color,marca,modelo,ram,memoria,sistema,dimensiones,otros,procesador)'
                        . ' values (:codigo_detalle,:serie,:color,:marca,:modelo,:ram,:memoria,:sistema,:dimensiones,:otros,:proce)';
                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':codigo_detalle', $codigo_detalle, PDO::PARAM_STR);
                $sentencia->bindParam(':serie', $serie, PDO::PARAM_STR);
                $sentencia->bindParam(':color', $color, PDO::PARAM_STR);
                $sentencia->bindParam(':marca', $marca, PDO::PARAM_STR);
                $sentencia->bindParam(':modelo', $modelo, PDO::PARAM_STR);
                $sentencia->bindParam(':ram', $ram, PDO::PARAM_STR);
                $sentencia->bindParam(':memoria', $memoria, PDO::PARAM_STR);
                $sentencia->bindParam(':sistema', $sistema, PDO::PARAM_STR);
                $sentencia->bindParam(':dimensiones', $dimensiones, PDO::PARAM_STR);
                $sentencia->bindParam(':otros', $otros, PDO::PARAM_STR);
                $sentencia->bindParam(':proce', $proce, PDO::PARAM_STR);
                $detalle_insertado = $sentencia->execute();

            } catch (PDOException $ex) {
                echo '<script>swal("No se puedo realizar el registro ", "Favor revisar los datos e intentar nuevamente", "warning");</script>';
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function obtener_ultimo_detale($conexion) {//obtenermos el codigo del ultimo detalle insertado

        if (isset($conexion)) {
            try {

                $sql = "SELECT MAX(codigo_detalle) AS id FROM detalles"; 
                foreach ($conexion->query($sql) as $row) {
                    $r = $row[0];
                }
                return $r;
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
    }

    public static function obtener_detalle($conexion, $codigo_detalle) {//obtenemos los detalles de un activo
        $detalle = new Detalles();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM detalles WHERE codigo_detalle='$codigo_detalle' ";  
                foreach ($conexion->query($sql) as $row) {
                    $detalle->setCodigo_detalle($row["codigo_detalle"]);
                    $detalle->setSeri($row["serie"]);
                    $detalle->setColor($row["color"]);
                    $detalle->setMarca($row["marca"]);
                    $detalle->setModelo($row["modelo"]);
                    $detalle->setRam($row["ram"]);
                    $detalle->setMemoria($row["memoria"]);
                    $detalle->setSistema($row["sistema"]);
                    $detalle->setDimencione($row["dimensiones"]);
                    $detalle->setOtros($row["otros"]);
                    $detalle->setProcesador($row["procesador"]);
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $detalle;//eniamos los detalles en un objeto tipo detalle
    }

    public static function actualizar_detalle($conexion, $detalle, $codigo_original) {
//recibe un objeto tipo detalle y el codigo del detalle
        $detalle_insertado = false;

        if (isset($conexion)) {
            try {
                //asignamos valores a nuevas variables
                $codigo_detalle = $detalle->getCodigo_detalle();
                $serie = $detalle->getSeri();
                $color = $detalle->getColor();
                $marca = $detalle->getMarca();
                $modelo = $detalle->getModelo();
                $ram = $detalle->getRam();
                $memoria = $detalle->getMemoria();
                $sistema = $detalle->getSistema();
                $dimensiones = $detalle->getDimencione();
                $otros = $detalle->getOtros();
                $proce = $detalle->getProcesador();

                $sql ="UPDATE detalles SET  "
                    . "serie=:serie,color=:color,marca=:marca,modelo=:modelo,ram=:ram,memoria=:memoria,sistema=:sistema"
                    . ",dimensiones=:dimensiones,otros=:otros,procesador=:proce WHERE codigo_detalle ='$codigo_original'";

                ///estos son alias para que PDO pueda trabajar 
                $sentencia = $conexion->prepare($sql);
                $sentencia->bindParam(':serie', $serie, PDO::PARAM_STR);
                $sentencia->bindParam(':color', $color, PDO::PARAM_STR);
                $sentencia->bindParam(':marca', $marca, PDO::PARAM_STR);
                $sentencia->bindParam(':modelo', $modelo, PDO::PARAM_STR);
                $sentencia->bindParam(':ram', $ram, PDO::PARAM_STR);
                $sentencia->bindParam(':memoria', $memoria, PDO::PARAM_STR);
                $sentencia->bindParam(':sistema', $sistema, PDO::PARAM_STR);
                $sentencia->bindParam(':dimensiones', $dimensiones, PDO::PARAM_STR);
                $sentencia->bindParam(':otros', $otros, PDO::PARAM_STR);
                $sentencia->bindParam(':proce', $proce, PDO::PARAM_STR);
                $detalle_insertado = $sentencia->execute();
              
                                
            } catch (PDOException $ex) {
                echo "<script>swal('Excelente!', 'hubo pedo '$sql' ', 'success');</script>";

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