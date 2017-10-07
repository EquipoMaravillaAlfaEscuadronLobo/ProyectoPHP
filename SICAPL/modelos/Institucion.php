<?php
class Institucion{
    private $codigo_institucion ;
    private  $nombre;
    
    function __construct() {
        
    }
    function getCodigo_institucion() {
        return $this->codigo_institucion;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setCodigo_institucion($codigo_institucion) {
        $this->codigo_institucion = $codigo_institucion;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


    
    
}

?>