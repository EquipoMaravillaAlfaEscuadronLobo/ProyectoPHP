<?php
class Activo{
    private $codigo_activo;
    private $codigo_tipo;
    private $codigo_proveedor;
    private $codigo_detalle;
    private $codigo_administrador;
    private $fecha_adquicision;
    private $precio;
    private $estado;
    private $foto;
    private $observacion;
    
    function getCodigo_activo() {
        return $this->codigo_activo;
    }

    function getCodigo_tipo() {
        return $this->codigo_tipo;
    }

    function getCodigo_proveedor() {
        return $this->codigo_proveedor;
    }

    function getCodigo_detalle() {
        return $this->codigo_detalle;
    }

    function getCodigo_administrador() {
        return $this->codigo_administrador;
    }

    function getFecha_adquicision() {
        return $this->fecha_adquicision;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFoto() {
        return $this->foto;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function setCodigo_activo($codigo_activo) {
        $this->codigo_activo = $codigo_activo;
    }

    function setCodigo_tipo($codigo_tipo) {
        $this->codigo_tipo = $codigo_tipo;
    }

    function setCodigo_proveedor($codigo_proveedor) {
        $this->codigo_proveedor = $codigo_proveedor;
    }

    function setCodigo_detalle($codigo_detalle) {
        $this->codigo_detalle = $codigo_detalle;
    }

    function setCodigo_administrador($codigo_administrador) {
        $this->codigo_administrador = $codigo_administrador;
    }

    function setFecha_adquicision($fecha_adquicision) {
        $this->fecha_adquicision = $fecha_adquicision;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }


            
}
?>