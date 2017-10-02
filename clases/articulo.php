<?php

class articulo extends conexion{

	function __construct($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k){

			$this->nom=$a;
			$this->titulo=$b;
			$this->sub=$c;
			$this->resumen=$d;
			$this->descrip=$e;
			$this->cantlike=$f;
			$this->cantcomp=$g;
			$this->cantvisita=$h;
			$this->estado=$i;
			$this->portada=$j;
			$this->seccion=$k;

		}

		//Metodos GET
	 public function getnom(){
		 return $this->nom;
	 }

	 public function gettitulo(){
		 return $this->titulo;
	 }

	 public function getsub(){
		 return $this->sub;
	 }

	 public function getresumen(){
		 return $this->resumen;
	 }

	 public function getdescrip(){
		 return $this->descrip;
	 }

	 public function getcantlike(){
		 return $this->cantlike;
	 }

	 public function getcantcomp(){
		 return $this->cantcomp;
	 }

	 public function getcantvisita(){
		 return $this->cantvisita;
	 }

	 public function getestado(){
		 return $this->estado;
	 }

	 public function getportada(){
		 return $this->portada;
	 }

	 public function getseccion(){
		 return $this->seccion;
	 }


	 //Funcion para cargar un articulo
	public function listarticulo($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion){
		
	    $obj = new conexion;
	    $conex = $obj->conectar();
	    $conex->beginTransaction();

			try{
				$sql = "SELECT * FROM articulo WHERE numero=:num;";
				$consulta = $conex->prepare($sql);
				$consulta->execute(array(':num'=> $num));

			    $conex->commit();
				$result = $consulta->fetchAll();
			    return $result;
			  	}
			    catch(PDOException $e){
			    $conex->rollback();
			    }
    }
		
	//Funcion para cargar la portada del index
	public function listarport($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion){
		
	    $obj = new conexion;
	    $conex = $obj->conectar();
	    $conex->beginTransaction();

			try{
				$sql = "SELECT * FROM articulo";
				$consulta = $conex->prepare($sql);
				$consulta->execute();

			    $conex->commit();
				$result = $consulta->fetchAll();
			    return $result;
			  	}
			    catch(PDOException $e){
			    $conex->rollback();
			    }
    }

}
?>
