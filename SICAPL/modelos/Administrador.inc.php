<?php
class Administrador{
    private $codigo_administrador;
    private $pasword;
    private $nivel;
    private $nombre;
    private $apellido;
    private $sexo;
    private $dui;
    private $foto;
    private $estado;
    private $observacion;
    private $email;
    private $fecha;
    
    
   
function __construct() {
     
    }
    
    function getFecha() {
        return $this->fecha;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

        
    function getCodigo_administrador() {
        return $this->codigo_administrador;
    }

    function getPasword() {
        return $this->pasword;
    }

    function getNivel() {
        return $this->nivel;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getDui() {
        return $this->dui;
    }

    function getFoto() {
        return $this->foto;
    }

    function getEstado() {
        return $this->estado;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function getEmail() {
        return $this->email;
    }

    function setCodigo_administrador($codigo_administrador) {
        $this->codigo_administrador = $codigo_administrador;
    }

    function setPasword($pasword) {
        $this->pasword = $pasword;
    }

    function setNivel($nivel) {
        $this->nivel = $nivel;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setDui($dui) {
        $this->dui = $dui;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    function setEmail($email) {
        $this->email = $email;
    }
}
?>