<?php

class edicion{

	private $cantvisita;
	private $fecha;

	function __construct($a,$b)
    {
			$this->cantvisita=$a;
			$this->fecha=$b;

		}

		//Metodos GET

	 public function getcantvisita()
	 {
		 return $this->cantvisita;
	 }

	 public function getfecha()
	 {
		 return $this->fecha;
	 }


		//Metodos SET
		public function setcantvisita($a)
    {
      $this->cantvisita=$cantvisita;
    }

		public function setfecha($b)
    {
      $this->fecha=$fecha;
    }

 		//Funciones de la clase edicion
		function alta ($conex){
	   $pu = new Persistenciaadministrador;
	   return ($pu->agregar($this,$conex));
	  }
}
?>
