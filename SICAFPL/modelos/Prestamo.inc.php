<?php 
/**
* 
*/
class PrestamoLibro 
{
	private $usuario;
	private $salida;
	private $devolucion;

	function __construct()
	{
		# code...
	}
	public function getUsuario()
	{
		return $this->usuario;
	}

	public function getSalida()
	{
		return $this->salida;
	}

	public function getDevolucion()
	{
		return $this->devolucion;
	}

	public function setUsuario($usuario)
	{
		$this->usuario=$usuario;
	}
	public function setSalida($salida)
	{
		$this->salida=$salida;
	}
	public function setDevolucion($devolucion)
	{
		$this->devolucion=$devolucion;
	}

}
 ?>