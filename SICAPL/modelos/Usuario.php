<?php
class Usuario{
    private $codigo_usuario;
    private $codigo_institucion;
    private $nombre;
    private $apellido;
    private $telefono;
    private $email;
    private $foto;
    private $sexo;
    private $estado;
    private $observacion;
    private $direccion;

    function __construct() {
        
    }
    function getObservacion() {
        return $this->observacion;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }
    function getDireccion() {
        return $this->direccion;
    }

            
    function getCodigo_usuario() {
        return $this->codigo_usuario;
    }

    function getCodigo_institucion() {
        return $this->codigo_institucion;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellido() {
        return $this->apellido;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function setEmail($email) {
        $this->email = $email;
    }
    
    function getFoto() {
        return $this->foto;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getEstado() {
        return $this->estado;
    }

    function setCodigo_usuario($codigo_usuario) {
        $this->codigo_usuario = $codigo_usuario;
    }

    function setCodigo_institucion($codigo_institucion) {
        $this->codigo_institucion = $codigo_institucion;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

}
?>