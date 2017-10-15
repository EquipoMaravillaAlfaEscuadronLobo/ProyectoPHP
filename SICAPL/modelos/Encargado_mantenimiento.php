<?php
class Encargado_mantenimiento{
    private $codigo_emantenimiento;
    private $nombre;
    private $telefono;
    private $correo;
    private $direcccion;

    function getCodigo_emantenimiento() {
        return $this->codigo_emantenimiento;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getCorreo() {
        return $this->correo;
    }

    function getDirecccion() {
        return $this->direcccion;
    }

    function setCodigo_emantenimiento($codigo_emantenimiento) {
        $this->codigo_emantenimiento = $codigo_emantenimiento;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setCorreo($correo) {
        $this->correo = $correo;
    }

    function setDirecccion($direcccion) {
        $this->direcccion = $direcccion;
    }




}
?>