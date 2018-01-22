<?php

class Recuperar {
    private $idrecuperacion;
    private $codigo_administrador;
    private $url_secreta;
    private $fecha;
    
    public function __construct() {
        
    }
    
    function getIdrecuperacion() {
        return $this->idrecuperacion;
    }

    function getCodigo_administrador() {
        return $this->codigo_administrador;
    }

    function getUrl_secreta() {
        return $this->url_secreta;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setIdrecuperacion($idrecuperacion) {
        $this->idrecuperacion = $idrecuperacion;
    }

    function setCodigo_administrador($codigo_administrador) {
        $this->codigo_administrador = $codigo_administrador;
    }

    function setUrl_secreta($url_secreta) {
        $this->url_secreta = $url_secreta;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }






}

