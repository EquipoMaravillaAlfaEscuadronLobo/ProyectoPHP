<?php
class Detalles{
   private $codigo_detalle;
   private $seri;
   private $color;
   private $marca;
   private $modelo;
   private $ram;
   private $memoria;
   private $sistema;
   private $dimencione;
   private $foto;
   private $otros;
   
   function getCodigo_detalle() {
       return $this->codigo_detalle;
   }

   function getSeri() {
       return $this->seri;
   }

   function getColor() {
       return $this->color;
   }

   function getMarca() {
       return $this->marca;
   }

   function getModelo() {
       return $this->modelo;
   }

   function getRam() {
       return $this->ram;
   }

   function getMemoria() {
       return $this->memoria;
   }

   function getSistema() {
       return $this->sistema;
   }

   function getDimencione() {
       return $this->dimencione;
   }

   function getFoto() {
       return $this->foto;
   }

   function getOtros() {
       return $this->otros;
   }

   function setCodigo_detalle($codigo_detalle) {
       $this->codigo_detalle = $codigo_detalle;
   }

   function setSeri($seri) {
       $this->seri = $seri;
   }

   function setColor($color) {
       $this->color = $color;
   }

   function setMarca($marca) {
       $this->marca = $marca;
   }

   function setModelo($modelo) {
       $this->modelo = $modelo;
   }

   function setRam($ram) {
       $this->ram = $ram;
   }

   function setMemoria($memoria) {
       $this->memoria = $memoria;
   }

   function setSistema($sistema) {
       $this->sistema = $sistema;
   }

   function setDimencione($dimencione) {
       $this->dimencione = $dimencione;
   }

   function setFoto($foto) {
       $this->foto = $foto;
   }

   function setOtros($otros) {
       $this->otros = $otros;
   }


           

}
?>