<?php
class Mantenimiento{
   private $codigo_mantenimiento;
   private $codigo_activo;//al final no se ocupo
   private $fecha;
   private $descripcion;
   private $costo;
   
   function getCodigo_mantenimiento() {
       return $this->codigo_mantenimiento;
   }

   function getCodigo_activo() {
       return $this->codigo_activo;
   }

   function getFecha() {
       return $this->fecha;
   }

   function getDescripcion() {
       return $this->descripcion;
   }

   function getCosto() {
       return $this->costo;
   }

   function setCodigo_mantenimiento($codigo_mantenimiento) {
       $this->codigo_mantenimiento = $codigo_mantenimiento;
   }

   function setCodigo_activo($codigo_activo) {
       $this->codigo_activo = $codigo_activo;
   }

   function setFecha($fecha) {
       $this->fecha = $fecha;
   }

   function setDescripcion($descripcion) {
       $this->descripcion = $descripcion;
   }

   function setCosto($costo) {
       $this->costo = $costo;
   }


}
?>