<?php

class seccion extends edicion{

	private $nom;


	function __construct($a)
    {
			$this->nom=$a;

		}

		//Metodos GET

	 public function getnom()
	 {
		 return $this->nom;
	 }

		//Metodos SET
		public function setnom($a)
    {
      $this->nom=$nom;
    }

 		//Funciones de la clase seccion
		function alta ($conex){
	   $pu = new Persistenciaadministrador;
	   return ($pu->agregar($this,$conex));
	  }
}
?>
