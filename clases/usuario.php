<?php

class usuario extends persona{

	private $estado;
	private $tipo;

	function __construct($a,$b)
    {
			$this->estado=$a;
			$this->tipo=$b;

		}

		//Metodos GET

	 public function getestado()
	 {
		 return $this->estado;
	 }

	 public function gettipo()
	 {
		 return $this->tipo;
	 }


		//Metodos SET
		public function setestado($a)
    {
      $this->estado=$estado;
    }

		public function settipo($b)
    {
      $this->tipo=$tipo;
    }

 		//Funciones de la clase usuario
		function alta ($conex){
	   $pu = new Persistenciaadministrador;
	   return ($pu->agregar($this,$conex));
	  }
}
?>
