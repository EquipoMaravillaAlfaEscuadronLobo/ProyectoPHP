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

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

