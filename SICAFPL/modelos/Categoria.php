<?php
class Categoria{
    private $codigo_tipo ;
    private  $nombre;
    
    function __construct() {
        
    }
    function getCodigo_tipo() {
        return $this->codigo_tipo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setCodigo_tipo($codigo_tipo) {
        $this->codigo_tipo = $codigo_tipo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}
?>