<?php

class Bitacora {

    private $codigo_bitacora;
    private $codigo_administrador;
    private $accion;
    private $fecha;
    
    function __construct() {
        
    }
    function getCodigo_bitacora() {
        return $this->codigo_bitacora;
    }

    function getCodigo_administrador() {
        return $this->codigo_administrador;
    }

    function getAccion() {
        return $this->accion;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setCodigo_bitacora($codigo_bitacora) {
        $this->codigo_bitacora = $codigo_bitacora;
    }

    function setCodigo_administrador($codigo_administrador) {
        $this->codigo_administrador = $codigo_administrador;
    }

    function setAccion($accion) {
        $this->accion = $accion;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }


    
}
?>