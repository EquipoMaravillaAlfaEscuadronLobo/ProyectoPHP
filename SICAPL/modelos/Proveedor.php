<?php
class Proveedor{
private $codigo_proveedor;
private $nombre;
private $apelido; 
private $direccion;
private $telefono;
private $correo;
private $fax;
function getCodigo_proveedor() {
    return $this->codigo_proveedor;
}

function getNombre() {
    return $this->nombre;
}

function getApelido() {
    return $this->apelido;
}

function getDireccion() {
    return $this->direccion;
}

function getTelefono() {
    return $this->telefono;
}

function getCorreo() {
    return $this->correo;
}

function getFax() {
    return $this->fax;
}

function setCodigo_proveedor($codigo_proveedor) {
    $this->codigo_proveedor = $codigo_proveedor;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function setApelido($apelido) {
    $this->apelido = $apelido;
}

function setDireccion($direccion) {
    $this->direccion = $direccion;
}

function setTelefono($telefono) {
    $this->telefono = $telefono;
}

function setCorreo($correo) {
    $this->correo = $correo;
}

function setFax($fax) {
    $this->fax = $fax;
}


}

?>