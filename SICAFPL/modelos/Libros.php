<?php
class Libros{
    private $codigo_libro;
    private $codigo_administrador;
    private $editoriales_codigo;
    private $titulo;
    private $estado;
    private $origen;
    private $fecha_publicacion;
    private $foto;
    
    
    function __construct() {
        
    }
    function getCodigo_libro() {
        return $this->codigo_libro;
    }

    function getCodigo_administrador() {
        return $this->codigo_administrador;
    }

    function getEditoriales_codigo() {
        return $this->editoriales_codigo;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getEstado() {
        return $this->estado;
    }

    function getOrigen() {
        return $this->origen;
    }

    function getFecha_publicacion() {
        return $this->fecha_publicacion;
    }

    function getFoto() {
        return $this->foto;
    }

    function setCodigo_libro($codigo_libro) {
        $this->codigo_libro = $codigo_libro;
    }

    function setCodigo_administrador($codigo_administrador) {
        $this->codigo_administrador = $codigo_administrador;
    }

    function setEditoriales_codigo($editoriales_codigo) {
        $this->editoriales_codigo = $editoriales_codigo;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setOrigen($origen) {
        $this->origen = $origen;
    }

    function setFecha_publicacion($fecha_publicacion) {
        $this->fecha_publicacion = $fecha_publicacion;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

}

?>