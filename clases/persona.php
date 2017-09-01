<?php

class persona{

	private $nom;
	private $ape;
	private $correo;
	private $tel;
	private $cont;


	function __construct($a,$b,$c,$d,$e)
    {
			$this->nom=$a;
			$this->ape=$b;
			$this->correo=$c;
			$this->tel=$d;
			$this->cont=$e;
		}

		//Metodos GET

	 public function getnom()
	 {
		 return $this->nom;
	 }

	 public function getape()
	 {
		 return $this->ape;
	 }

	 public function getcorreo()
	 {
		 return $this->correo;
	 }

	 public function gettel()
	 {
		 return $this->tel;
	 }

	 public function getcont()
	 {
		 return $this->cont;
	 }

		//Metodos SET
		public function setnom($a)
    {
      $this->nom=$nom;
    }

		public function setape($b)
    {
      $this->ape=$ape;
    }

		public function setcorreo($c)
    {
      $this->correo=$correo;
    }

		public function settel($d)
    {
      $this->tel=$tel;
    }

		public function setcont($e)
    {
      $this->cont=$cont;
    }


 		//Funciones de la clase persona
		function alta ($conex){
	   $pu = new Persistenciaadministrador;
	   return ($pu->agregar($this,$conex));
	  }
}
?>
