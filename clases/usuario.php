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
				$sql = "SELECT correo,contrasena FROM persona WHERE correo=:correo AND contrasena=:contrasena;";
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




////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// COMIENZO DE LOS PROCESOS LOGICOS


if ($tipo == 0){
	$correo = strip_tags(trim($_POST['correo']));
	$contrasena = strip_tags(trim($_POST['contrasena']));
	$contrasena = md5($contrasena);

		$obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
		$datos_u = $obj->login('','',$correo,'',$contrasena,'','');
		$datos_p = $obj->listausu('','',$correo,'','','','');

			if(!empty($datos_u)){
				$_SESSION['loginusu'] = $correo;
				$_SESSION['modi'] = $datos_p;
				?>

				<script type="text/javascript">
					var j = "<?php echo $correo; ?>";
					window.alert("Bienvenido " + j);
					location.href = "<?php echo $perfil;?>";
				</script>

				<?php

		}

			else{
				?>

				<script type="text/javascript">
					window.alert("El Usuario o Password \n no es correcto.");
					location.href = "<?php echo $login2;?>";
				</script>

				<?php

			}
		}

		if ($tipo == 1) {
			$correo = $_SESSION['loginusu'];

		  $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
		  $datos_u = $obj->listausu('','',$correo,'','','','');

		    if(!empty($datos_u[0])){
		    $_SESSION['modi']=$datos_u;

		      ?>

		      <script type="text/javascript">
		       location.href="<?php echo $modiusu; ?>";
		      </script>

		      <?php

		    }else{

		    ?>
		    <script type="text/javascript">
		     window.alert("No a iniciado sesion!");
		     location.href="<?php echo $login2; ?>";
		    </script>
		    <?php

		  }
		}


		if ($tipo == 2) {
			//trim elimina los espacion en blanco
		  $correo = $_SESSION['loginusu'];
		  $nombre = strip_tags(trim($_POST['nombre']));
		  $apellido = strip_tags(trim($_POST['apellido']));
		  $telefono = strip_tags(trim($_POST['telefono']));
		  $tipo = strip_tags(trim($_POST['tipo']));

		  $obj = new Usuario ($nombre,$apellido,$correo,$telefono,'',$tipo,''); //la cantidad de elementos de la clase
		  $datos_u = $obj->modiusu($nombre,$apellido,$correo,$telefono,'',$tipo,'');

		  ?>

		    <?php if(empty($datos_u)) : ?>

		        <script type="text/javascript">
		          window.alert("Se realizaron los cambios de forma correcta");
		          location.href = "<?php echo $perfil;?>";
		        </script>

		      <?php else: ?>

		        <script type="text/javascript">
		          window.alert("Ocurrio un error");
		          location.href = "<?php echo $modiusu;?>";
		        </script>

		      <?php endif;?>


		        <?php

		        //header("Location: http://www.informeesencial.com/perfil.php?editado=1");

		}

		if ($tipo == 3) {
			//trim elimina los espacion en blanco
			$nombre = strip_tags(trim($_POST['nombre']));
			$apellido = strip_tags(trim($_POST['apellido']));
			$correo = strip_tags(trim($_POST['correo']));
			$tel = strip_tags(trim($_POST['tel']));
			$tel2 = strip_tags(trim($_POST['tel2']));

			$contrasena = strip_tags(trim($_POST['contrasena']));
			$contrasena2 = strip_tags(trim($_POST['contrasena2']));
			$contrasena = md5($contrasena);
			$contrasena2 = md5($contrasena2);

			$tipo = strip_tags(trim($_POST['tipo']));
			$estado = "Activo"; //estado del usuario

			//Confirma que las contraseñas coicidan!
			if ($contrasena == $contrasena2) {

			    $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
			    $datos_u = $obj->alta($nombre,$apellido,$correo,$tel,$contrasena,$tipo,$estado);

			    if (!empty($tel2)){ //si existe en telefono 2 lo agrega!
			      $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
			      $datos_p = $obj->altatel('','',$correo,$tel2,'','','');
			    }

			  }else{

			    ?>

			      <script type="text/javascript">
			        window.alert("Las contraseñas no coinciden");
			        location.href = "<?php echo $reg;?>";
			      </script>

			    <?php

			}

			  if(!empty($datos_u)){
			    ?>

			    <script type="text/javascript">
			      var j = "<?php echo $correo; ?>";
			      window.alert("EL CORREO " + j + " YA EXISTE!");
			      location.href = "<?php echo $reg;?>";
			    </script>

			    <?php

			  }

			else{

			  ?>

			  <script type="text/javascript">
			    var j = "<?php echo $correo; ?>";
			    window.alert("Usuario " + j + "creado correctamente");
			    location.href = "<?php echo $index;?>";
			  </script>

			  <?php

			}
		}

		if ($tipo == 4) {
			include("funciones.php");
	    sessionCheck();

	    $path = $_SERVER['SERVER_ADDR'];
	    $host= gethostname();
	    $ip = gethostbyname($host);
	    session_unset();
	    session_destroy();
	?>
	    <script type="text/javascript">
	    window.alert("Sesión cerrada correctamente.");
	    location.href="<?php echo $index;?>";
	    </script>
		<?php
		}

if ($tipo == 10) {
	//trim elimina los espacion en blanco
	$correo = strip_tags(trim($_POST['correo']));
	$contrasena = strip_tags(trim($_POST['contrasena']));
	$contrasena = md5($contrasena);

	    $obj = new Usuario ('','',$correo,'',$contrasena,'',''); //la cantidad de elementos de la clase
	    $datos_u = $obj->login('','',$correo,'',$contrasena,'','');

	  if(!empty($datos_u)){
	    ?>

	      <script type="text/javascript">
	        window.alert("Correo enviado correctamente");
	        location.href = "<?php echo $index; ?>";
	      </script>

	    <?php

	}else{

	      ?>

	      <script type="text/javascript">
	        var j = "<?php echo $correo; ?>";
	        window.alert("Usuario " + " " + j + " " + " y/o contraseña incorrecta");
	        location.href = "<?php echo $cont; ?>";
	      </script>

	      <?php

	    }
}

if ($tipo == 12) {
	$correo = $_SESSION['loginusu'];

  $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $obj->listausu('','',$correo,'','','','');

    if(!empty($datos_u[0])){
    $_SESSION['modi']=$datos_u;

      ?>

      <script type="text/javascript">
       location.href="<?php echo $modiusu; ?>";
      </script>

      <?php

    }else{

    ?>
    <script type="text/javascript">
     window.alert("No a iniciado sesion!");
     location.href="<?php echo $login2; ?>";
    </script>
    <?php

  }
}

?>
