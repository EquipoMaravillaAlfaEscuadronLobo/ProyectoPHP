<?php
	/**
	* 
	*/
	class Autores{
		private $codigo;
		private $nombre;
		private $apellido;
		private $nacimiento;
		private $biografia;

		
		function __construct()
		{
			
		}

		public function setCodigo($codigo){
			$this->codigo=$codigo;
		}
		public function setNombre($nombre){
			$this->nombre=$nombre;
		}
		public function setApellido($apellido){
			$this->apellido=$apellido;
		}
		public function setNacimiento($nacimiento){
			$this->nacimiento=$nacimiento;
		}
		public function setBiografia($biografia){
			$this->biografia=$biografia;
		}

		public function getCodigo()
		{
			return $this->codigo;
		}
		public function getNombre()
		{
			return $this->nombre;
		}

		public function getApellido()
		{
			return $this->apellido;
		}
		public function getNacimiento()
		{
			return $this->nacimiento;
		}
		public function getBiografia()
		{
			return $this->biografia;
		}
	}
?>