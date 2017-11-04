<?php

class edicion extends conexion{

	private $idarticulo;
	private $fecha;

	function __construct($a,$b)
    {
			$this->idarticulo=$a;
			$this->fecha=$b;

		}

		//Metodos GET
	 public function getidarticulo(){
		 return $this->idarticulo;
	 }

	 public function getfecha(){
		 return $this->fecha;
	 }

}
?>
