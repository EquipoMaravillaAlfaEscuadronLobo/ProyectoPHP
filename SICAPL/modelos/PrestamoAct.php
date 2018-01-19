<?php 
/**
* 
*/
class PrestamoActivo
{
	private $usuario;
	private $salida;
	private $devolucion;
        private $observacion;
        function getObservacion() {
            return $this->observacion;
        }

        function setObservacion($observacion) {
            $this->observacion = $observacion;
        }

        	function __construct()
	{
		# code...
	}
        function getUsuario() {
            return $this->usuario;
        }

        function getSalida() {
            return $this->salida;
        }

        function getDevolucion() {
            return $this->devolucion;
        }

        function setUsuario($usuario) {
            $this->usuario = $usuario;
        }

        function setSalida($salida) {
            $this->salida = $salida;
        }

        function setDevolucion($devolucion) {
            $this->devolucion = $devolucion;
        }


}
 ?>