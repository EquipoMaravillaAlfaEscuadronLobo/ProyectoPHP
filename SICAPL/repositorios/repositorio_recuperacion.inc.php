<?php
    class RepositorioRecuperacion {

        public static function registrarPeticion($conexion, $codigoAdmin, $urlSecreta){
            $peticion_generada=false;
            if (isset($conexion)) {
                try {
                    $sql="INSERT into recuperacion(codigo_administrador, url_secreta, fecha) values (:usuario, :url, NOW())";
                    
                    $sentencia=$conexion -> prepare($sql);
                    $sentencia ->bindParam(':usuario', $codigoAdmin, PDO::PARAM_STR);
                    $sentencia ->bindParam(':url', $urlSecreta, PDO::PARAM_STR);
                    $peticion_generada=$sentencia->execute();
                } catch (PDOException $ex) {
                    echo $exc->getTraceAsString();
                }
                        }
                        return $peticion_generada;
            
        }
        
        public static function obtenerPeticion($conexion, $url_secreta) {
            $peticion = new Recuperar();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM recuperacion WHERE url_secreta='$url_secreta'"; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                    $peticion->setCodigo_administrador($row["codigo_administrador"]);
                    $peticion->setIdrecuperacion($row["idrecuperacion"]);
                    $peticion->setUrl_secreta($row["url_secreta"]);
                    $peticion->setFecha($row["fecha"]);
                    
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $peticion;
        }
        
         public static function obtenerPeticionEmail($conexion, $codigoAdmin) {
            $peticion = new Recuperar();
        if (isset($conexion)) {
            try {

                $sql = "SELECT * FROM recuperacion WHERE codigo_administrador='$codigoAdmin'"; ///estos son alias para que PDO pueda trabajar 
                foreach ($conexion->query($sql) as $row) {
                    $peticion->setCodigo_administrador($row["codigo_administrador"]);
                    $peticion->setIdrecuperacion($row["idrecuperacion"]);
                    $peticion->setUrl_secreta($row["url_secreta"]);
                    $peticion->setFecha($row["fecha"]);
                    
                }
            } catch (PDOException $ex) {
                print 'ERROR: ' . $ex->getMessage();
            }
        }
        return $peticion;
        }
        
        public static function eliminarPeticion($conexion, $codigoAdmin){
            $peticion_borrada=false;
            if (isset($conexion)) {
                try {
                    $sql="delete from recuperacion where codigo_administrador='$codigoAdmin'";
                    
                    
                    $peticion_borrada=$conexion->query($sql);
                } catch (PDOException $exc) {
                    echo $exc->getMessage();
                }
                        }
                        return $peticion_borrada;
        }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

