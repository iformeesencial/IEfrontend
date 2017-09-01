<?php

class administrador extends persona{

	private $tipo;

	function __construct($a)
    {

		$this->tipo=$a;

		}

		//Metodos GET
	 public function gettipo()
	 {
		 return $this->tipo;
	 }

	 //Metodos SET
		public function settipo($a)
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
