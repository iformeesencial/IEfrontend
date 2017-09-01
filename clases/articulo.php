<?php

class articulo extends edicion{

	private $num;
	private $titulo;
	private $sub;
	private $resumen;
	private $descrip;
	private $cantlike;
	private $cantcomp;
	private $estado;


	function __construct($a,$b,$c,$d,$e,$f,$g,$h)
    {
			$this->nom=$a;
			$this->titulo=$b;
			$this->sub=$c;
			$this->resumen=$d;
			$this->descrip=$e;
			$this->cantlike=$f;
			$this->cantcomp=$g;
			$this->estado=$h;

		}

		//Metodos GET

	 public function getnom()
	 {
		 return $this->nom;
	 }

	 public function gettitulo()
	 {
		 return $this->titulo;
	 }

	 public function getsub()
	 {
		 return $this->sub;
	 }

	 public function getresumen()
	 {
		 return $this->resumen;
	 }

	 public function getdescrip()
	 {
		 return $this->descrip;
	 }

	 public function getcantlike()
	 {
		 return $this->cantlike;
	 }

	 public function getcantcomp()
	 {
		 return $this->cantcomp;
	 }

	 public function getestado()
	 {
		 return $this->estado;
	 }


		//Metodos SET
		public function setnom($a)
    {
      $this->nom=$nom;
    }

		public function settitulo($b)
    {
      $this->titulo=$titulo;
    }

		public function setsub($c)
    {
      $this->sub=$sub;
    }

		public function setresumen($d)
    {
      $this->resumen=$resumen;
    }

		public function setdescrip($e)
    {
      $this->descrip=$descrip;
    }

		public function setcantlike($f)
    {
      $this->cantlike=$cantlike;
    }

		public function setcantcomp($g)
    {
      $this->cantcomp=$cantcomp;
    }

		public function setestado($h)
    {
      $this->estado=$estado;
    }

 		//Funciones de la clase seccion
		function alta ($conex){
	   $pu = new Persistenciaadministrador;
	   return ($pu->agregar($this,$conex));
	  }
}
?>
