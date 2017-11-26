<?php

class usuario extends conexion{

	function __construct($a,$b,$c,$d,$e,$f,$g){

			$this->nombre=$a;
			$this->apellido=$b;
			$this->correo=$c;
			$this->telefono=$d;
			$this->contrasena=$e;
			$this->tipo=$f;
			$this->estado=$g;
		}

		//Metodos GET

	 public function getnombre(){
		 return $this->nombre;
	 }

	 public function getapellido(){
		 return $this->apellido;
	 }

	 public function getcorreo(){
		 return $this->correo;
	 }

	 public function gettelefono(){
		 return $this->telefono;
	 }

	 public function getcontrasena(){
		 return $this->contrasena;
	 }

	 public function gettipo(){
		 return $this->tipo;
	 }

	 public function getestado(){
		 return $this->estado;
	 }

 //Funcion para el logue del usuario
	public function login($nombre,$apellido,$correo,$telefono,$contrasena,$tipo,$estado){
    $obj = new conexion;
    $conex = $obj->conectar();
    $conex->beginTransaction();

			try{
				$sql = "SELECT * FROM persona,usuario
								WHERE correo=:correo AND correousu=:correo	AND contrasena=:contrasena
								AND estado='activo';";
				$consulta = $conex->prepare($sql);
				$consulta->execute(array(':correo'=> $correo,
										 ':contrasena' => $contrasena));

        $conex->commit();
				$result = $consulta->fetchAll();
        return $result;
      }
      catch(PDOException $e){
        $conex->rollback();
      }
    }

//Funcion de listado de datos segun usuario logueado en la pantalla para realizar el modificado del mismo
		public function listausu($nombre,$apellido,$correo,$telefono,$contrasena,$tipo,$estado){
				$obj = new conexion;
				$conex = $obj->conectar();
				$conex->beginTransaction();

				try{
				$sql = "SELECT * FROM persona,usuario,telefono WHERE correo=:correo AND correousu=:correo AND correoper=:correo;";
				$consulta = $conex->prepare($sql);
				$consulta->execute(array(':correo'=> $correo));

			  	$conex->commit();
				$result = $consulta->fetchAll();
				return $result;
				}

				catch(PDOException $e){
					$conex->rollback();
				}
			}

 //Funcion que edita los datos del usuario luego de modificar
		public function modiusu($nombre,$apellido,$correo,$telefono,$contrasena,$tipo,$estado){
				$obj = new conexion;
				$conex = $obj->conectar();
				$conex->beginTransaction();

				try{
	      			$sql = "UPDATE persona,usuario,telefono
	        	  	SET nombre=:nombre, apellido=:apellido, telefono=:telefono, tipo=:tipo
	        	  	WHERE correo=:correo AND correousu=:correo AND correoper=:correo;";

	        		$consulta = $conex->prepare($sql);
							$consulta->execute(array(':nombre'=> $nombre,
					 						 								':apellido'=> $apellido,
					 					 	 								':telefono'=> $telefono,
					 					 	 								':tipo'=> $tipo,
				  	 					 	 							':correo'=> $correo));

				    $conex->commit();
					$result = $consulta->fetchAll();
					return $result;
					}

						catch(PDOException $e){
						//$conex->rollback();
						}
					}


					 //Funcion que deshabilita al usuario (sin borrarlo de la base)
							public function bajausu($nombre,$apellido,$correo,$telefono,$contrasena,$tipo,$estado){
									$obj = new conexion;
									$conex = $obj->conectar();
									$conex->beginTransaction();

									try{
						      			$sql = "UPDATE persona,usuario
						        	  	SET estado='desactivo'
													WHERE correo=:correo AND correousu=:correo;";

						        		$consulta = $conex->prepare($sql);
												$consulta->execute(array(':correo'=> $correo));

												$conex->commit();
												$result = $consulta->fetchAll();
										}

											catch(PDOException $e){
											//$conex->rollback();
											}
										}

	//Funcion para crear un nuevo usuario
	    public function alta($nombre,$apellido,$correo,$telefono,$contrasena,$tipo,$estado){
	    	$obj = new conexion;
			$conex = $obj->conectar();
			$conex->beginTransaction();

			try{
           		//COMPRUEBA QUE EL CORREO EN LA TABLA PERSONA NO EXISTA
		        $sql = "SELECT correo FROM persona
		        		WHERE correo=:correo;";

		        $consulta = $conex->prepare($sql);
				$consulta->execute(array(':correo'=> $correo));

				$conex->commit();
				$result = $consulta->fetchAll();
				}

			      catch(PDOException $e){
			      //$conex->rollback();
			      }

			if (empty($result)) {
				$obj = new conexion;
				$conex = $obj->conectar();
				$conex->beginTransaction();

				try{
		        $sql = "INSERT INTO persona (nombre,apellido,correo,contrasena)
		        		VALUES (:nombre, :apellido, :correo, :contrasena);";

		        $consulta2 = $conex->prepare($sql);
		        $consulta2->execute(array(':nombre'=> $nombre,
		        						  ':apellido'=> $apellido,
										  ':correo'=> $correo,
										  ':contrasena'=> $contrasena));

		        $conex->commit();
		        $result = $consulta2->fetchAll();


		        }
			      catch(PDOException $e){
			       // $conex->rollback();
			      }


				if (empty($result)){

					$obj = new conexion;
					$conex = $obj->conectar();
					$conex->beginTransaction();

					try{
					$sql = "SELECT correoper,telefono FROM telefono
							WHERE correoper=:correoper AND telefono=:telefono;";

					$consulta3 = $conex->prepare($sql);
					$consulta3->execute(array(':correoper' => $correo,
											  ':telefono' => $telefono));

					$conex->commit();
			        $result = $consulta3->fetchAll();

			        }

			      	catch(PDOException $e){
			        //$conex->rollback();
				    }


					if (empty($result)){

						$obj = new conexion;
						$conex = $obj->conectar();
						$conex->beginTransaction();

						try{
						$sql = "INSERT INTO telefono (correoper,telefono)
		        				VALUES (:correoper, :telefono);";

		        		$consulta4 = $conex->prepare($sql);
						$consulta4->execute(array(':correoper'=> $correo,
												  ':telefono' => $telefono));

						$conex->commit();
			        	$result = $consulta4->fetchAll();
			        	}

			            catch(PDOException $e){
				        //$conex->rollback();
					    }

						if (empty($result)){

							$obj = new conexion;
							$conex = $obj->conectar();
							$conex->beginTransaction();

							//COMPRUEBA QUE EL CORREO DEL USUARIO NO EXISTA
							try{
					        $sql = "SELECT correousu FROM usuario
					        		WHERE correousu=:correo;";

					        $consulta5 = $conex->prepare($sql);
							$consulta5->execute(array(':correo'=> $correo));

							$conex->commit();
							$result = $consulta5->fetchAll();

							}

			      			catch(PDOException $e){
			        		//$conex->rollback();
			        		}

							if (empty($result)) {

								// AGREGA NUEVO USUARIO EN LA TABLA USUARIO
								try{
						        $sql = "INSERT INTO usuario (correousu,tipo,estado)
						        	    VALUES (:correo, :tipo, :estado);";

						        $consulta6 = $conex->prepare($sql);

								$consulta6->execute(array(':correo' =>$correo,
														  ':tipo' => $tipo,
														  ':estado' => $estado));
								$conex->commit();
								$result = $consulta6->fetchAll();
								return $result;

								}

			      				catch(PDOException $e){
			        			//$conex->rollback();
			        			}

								}else{
										return $result;
									}

						    }else{
								 return $result;
								 }

						}else{
							   return $result;
							 }
					}else{
						  return $result;
						 }
				}else{
					return $result;
					}
				} //cierre del nuevo usuario

		//Funcion para crear un nuevo usuario
	    public function altatel($nombre,$apellido,$correo,$telefono,$contrasena,$tipo,$estado){
	    	$obj = new conexion;
			$conex = $obj->conectar();
			$conex->beginTransaction();

			try{

				$sql = "INSERT INTO telefono (correoper,telefono)
		        				VALUES (:correoper, :telefono);";

		        		$consulta4 = $conex->prepare($sql);
						$consulta4->execute(array(':correoper'=> $correo,
												  ':telefono' => $telefono));

						$conex->commit();
			        	$result = $consulta4->fetchAll();
			    }
	            catch(PDOException $e){
		        //$conex->rollback();
			    }
		}

}//CIERRE DE LA CLASE USUARIO






?>
