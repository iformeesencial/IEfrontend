<?php

class articulo extends conexion{

	function __construct($a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m){

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
			$this->fecha=$l;
			$this->correoadmin=$m;

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

	 public function getfecha(){
		 return $this->fecha;
	 }

	 public function getcorreoadmin(){
		 return $this->correoadmin;
	 }


	 //Funcion para cargar un articulo
	public function listarticulo($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion,$fecha,$correoadmin){

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
	public function listarport($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion,$fecha,$correoadmin){

	    $obj = new conexion;
	    $conex = $obj->conectar();
	    $conex->beginTransaction();

			try{
				$sql = "SELECT * FROM articulo,edicion,pertenece
								WHERE fecha_edi=:fecha_articulo
								AND fecha_crea=:fecha_articulo
								AND numero = numero GROUP BY numero;";
				$consulta = $conex->prepare($sql);
				$consulta->execute(array(':fecha_articulo'=> $fecha));

			    $conex->commit();
				$result = $consulta->fetchAll();
			    return $result;
			  	}
			    catch(PDOException $e){
			    $conex->rollback();
			    }
    }

    //Funcion para cargar los articulos debajo de la portada
	public function allart($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion,$fecha,$correoadmin){

	    $obj = new conexion;
	    $conex = $obj->conectar();
	    $conex->beginTransaction();

			try{
				$sql = "SELECT * FROM articulo,edicion,pertenece,categoria
						WHERE numero = numero
						AND numero_art_pertenece=numero
						AND idcat=ida_cat
						GROUP BY numero;"; //lista todos los articulos que pertenescan a la portada

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

    //Funcion para cargar las noticias segun seleccion de seccion de las mismas
	public function listarseccion($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion,$fecha,$correoadmin){

	    $obj = new conexion;
	    $conex = $obj->conectar();
	    $conex->beginTransaction();

			try{
					$sql = "SELECT * FROM articulo,categoria,edicion,pertenece
							WHERE nombrecat=:seccion
							AND fecha_crea=fecha_edi
							AND fecha_pert=fecha_edi
							AND numero_art_pertenece=numero
							AND idcat=ida_cat";

				$consulta = $conex->prepare($sql);
				$consulta->execute(array(':seccion'=> $seccion));

			    $conex->commit();
				$result = $consulta->fetchAll();
			    return $result;
			  	}
			    catch(PDOException $e){
			    $conex->rollback();
			    }
    }

    // FUNCION QUE CARGA LOS COMENTARIOS POR ARTICULO SELECCIONADO
    public function cargacom($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion,$fecha,$correoadmin){

		    $obj = new conexion;
		    $conex = $obj->conectar();
		    $conex->beginTransaction();

					try{
						$sql = "SELECT correousu,comentario,fecha_coment
										FROM usuario,comentario,articulo,persona
										WHERE (numero=:num AND numero_coment=:num)
										AND correo_persona=correousu
										GROUP BY fecha_coment DESC;";
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

	    //Busqueda de articulos del coso de busqueda en el menu del sitio
	    public function busqueda($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion,$fecha,$correoadmin){

		    $obj = new conexion;
		    $conex = $obj->conectar();
		    $conex->beginTransaction();

					try{
						$sql = "SELECT * FROM articulo
								WHERE titulo LIKE concat('%', :titulo, '%');";

						$consulta = $conex->prepare($sql);
						$consulta->execute(array(':titulo'=> $titulo));

		        $conex->commit();
						$result = $consulta->fetchAll();
		        return $result;
		      }
		      catch(PDOException $e){
		        $conex->rollback();
		      }
	    }

	    //Realiza comentario en un articulo
	    public function comenta($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion,$fecha,$correoadmin){

		    $obj = new conexion;
		    $conex = $obj->conectar();
		    $conex->beginTransaction();

					try{

						$sql = "INSERT INTO comentario (correo_persona, numero_coment, comentario, fecha_coment)
										VALUES (:correo_persona, :numero_coment, :comentario, :fecha_coment);";

						$consulta = $conex->prepare($sql);
						$consulta->execute(array(':correo_persona' => $correoadmin, ':numero_coment' => $num,
												 ':comentario' => $sub, ':fecha_coment' => $fecha));

		        		$conex->commit();
						$result = $consulta->fetchAll();
		        		return $result;
		      }
		      catch(PDOException $e){
		        //$conex->rollback();
		      }
	    }

	    //Eliminar el comentario de un usuario
	    public function delcom($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion,$fecha,$correoadmin){

		    $obj = new conexion;
		    $conex = $obj->conectar();
		    $conex->beginTransaction();

					try{

						$sql = "DELETE FROM comentario
										WHERE correo_persona=:correo_persona
										AND fecha_coment=:fecha_coment;";

						$consulta = $conex->prepare($sql);
						$consulta->execute(array(':correo_persona' => $correoadmin, ':fecha_coment' => $fecha));

		        		$conex->commit();
						$result = $consulta->fetchAll();
		        		return $result;
		      }
		      catch(PDOException $e){
		        //$conex->rollback();
		      }
	    }

			//Agrega un me gusta a un articulo
	    public function megusta($num,$titulo,$sub,$resumen,$descrip,$cantlike,$cantcomp,$cantvisita,$estado,$portada,$seccion,$fecha,$correoadmin){

		    $obj = new conexion;
		    $conex = $obj->conectar();
		    $conex->beginTransaction();

					try{

						$sql = "UPDATE articulo SET cantlike_articulo=cantlike_articulo+1 WHERE numero=:numero;";

						$consulta = $conex->prepare($sql);
						$consulta->execute(array(':numero' => $num));

		        		$conex->commit();
						$result = $consulta->fetchAll();
		        		return $result;
		      }
		      catch(PDOException $e){
		        //$conex->rollback();
		      }
	    }



}


//////////////////////////////////////////////////////////////////////////////



?>
