<?php
$tipo = $_GET['estado']; //toma valor de la url

include('../clases/usuario.php');
include('../clases/articulo.php');
include('../clases/edicion.php');

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

			$correo2 = $_GET['correo']; //toma valor de la url
			$correo = $_SESSION['loginusu'];

		  $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
		  $datos_u = $obj->listausu('','',$correo,'','','','');

			if (!empty($correo2)) {
				?>
				<script type="text/javascript">
				 location.href="<?php echo $perfil; ?>";
				</script>
				<?php
			}
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
		          location.href = "<?php echo $handler;?>?estado=1&correo=<?php echo $correo?>";
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

if ($tipo == 14) {
	$correo = $_SESSION['loginusu'];
  $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $obj->bajausu('','',$correo,'','','','');

    if(empty($datos_u)){

			//Elimina variable de entorno del usuario luego de ser desactivado
			$path = $_SERVER['SERVER_ADDR'];
	    $host= gethostname();
	    $ip = gethostbyname($host);
	    session_unset();
	    session_destroy();

      ?>

      <script type="text/javascript">
			window.alert("Se elimino usuario correctamente!");
       location.href="<?php echo $index;?>";
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

if ($tipo == 5) {
	//$num = strip_tags(trim($_POST['num'])); //numero de articulo seleccionado en el index
	$num = $_GET['num']; //toma valor de la url

  $obj = new articulo ('','','','','','','','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $obj->listarticulo($num,'','','','','','','','','','','','');
  $datos_p = $obj->cargacom($num,'','','','','','','','','','','','');

    if(!empty($datos_u[0])){
      $_SESSION['dato']=$datos_u;
      $_SESSION['usuario']=$datos_p;
      $_SESSION['arti']=$datos_u[0][0]; //variable de entorno que lleva el numero de articulo para mostrarlo en articulo

        ?>

        <script type="text/javascript">
         location.href="<?php echo $art; ?>";
        </script>

        <?php

    }else{

      ?>
      <script type="text/javascript">
       window.alert("No se encuentra articulo!");
       location.href="<?php echo $index; ?>";
      </script>
      <?php

    }
}


if ($tipo == 6) {

	if (!isset($_SESSION['port'])) { //si la variable de busqueda no esta seteada realiza busqueda por dia actual de inicio al sitio

  //$fecha = getdate(); //aca iria la fecha por defecto y luego segun la busqueda seleccionada

  $fecha = "08/11/2017";
  //$fecha = date("d/m/Y"); // da formato a la fecha como en lla base
  $obj = new articulo ('','','','','','','','','','','',$fecha,''); //la cantidad de elementos de la clase
  $datos_u = $obj->listarport('','','','','','','','','','','',$fecha,'');
  $datos_p = $obj->allart('','','','','','','','','','','','',''); //Lista todos los articulo disponibles

    if(!empty($datos_u[0])){
      $_SESSION['port']=$datos_u; // Variable de session para cargar edicion
      $_SESSION['todo']=$datos_p; // Variable de session para cargar todos los articulos en la portada

        ?>
          <script type="text/javascript">
           location.href="<?php echo $index; ?>";
          </script>
        <?php

    }else{
          ?>
            <script type="text/javascript">
             window.alert("Error al cargar edicion");
            </script>
          <?php
    }

  }

  //Toma fecha de la busqueda realizada por fecha en edicion
  else{
  $fecha = strip_tags(trim($_POST['fechaedi']));

    if (empty($fecha)) { //Controla que el valor de la fecha no se mande en blanco

      ?>
        <script type="text/javascript">
          window.alert("¡¡Cargue una fecha!!");
          location.href="<?php echo $index; ?>";
        </script>
      <?php

      }else{

          $fecha = date("d/m/Y",strtotime($fecha)); // da formato a la fecha como en lla base

          $obj = new articulo ('','','','','','','','','','','',$fecha,''); //la cantidad de elementos de la clase
          $datos_u = $obj->listarport('','','','','','','','','','','',$fecha,'');
          $datos_p = $obj->allart('','','','','','','','','','','','',''); //Lista todos los articulo disponibles

          //die(var_dump($datos_u));

            if(!empty($datos_u[0])){

              $_SESSION['port']=$datos_u; // Variable de session para cargar edicion
              $_SESSION['todo']=$datos_p; // Variable de session para cargar todos los articulos en la portada

              ?>
                <script type="text/javascript">
                 location.href="<?php echo $index; ?>";
                </script>
              <?php
              }else{

                    ?>
                      <script type="text/javascript">
                        window.alert("No se encuentra dicha edicion");
                        location.href="<?php echo $index; ?>";
                      </script>

                    <?php
                    }

    }
  }
}

if ($tipo == 7) {
	$seccion = $_GET['seccion']; //toma variable de la url del menu segun categoria

  $obj = new articulo ('','','','','','','','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $obj->listarseccion('','','','','','','','','','',$seccion,'','');

    if(!empty($datos_u)){
      $_SESSION['seccion']=$datos_u;
			//die(var_dump($datos_u[0][5]));
        ?>

        <script type="text/javascript">
          location.href = "<?php echo $cat;?>";
        </script>

        <?php

      }else{

        ?>

        <script type="text/javascript">
          window.alert("No existen articulo de esa categoria");
          location.href = "<?php echo $index;?>";
        </script>

        <?php

    }
}

if ($tipo == 8) {
	$titulo = strip_tags(trim($_POST['titulo'])); //numero de articulo seleccionado en el index

  if (empty($titulo)) {

    ?>
        <script type="text/javascript">
         window.alert("Debe escribir un titulo de articulo")
         location.href="<?php echo $index; ?>";
        </script>

    <?php

  }

  $obj = new articulo ('','','','','','','','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $obj->busqueda('',$titulo,'','','','','','','','','','','');
  //$datos_p = $obj->cargacom('',$titulo,'','','','','','','','','','','');

    if(!empty($datos_u[0])){
      $_SESSION['seccion']=$datos_u;

        ?>

        <script type="text/javascript">
         location.href="<?php echo $cat; ?>";
        </script>

        <?php

    }else{

      ?>
      <script type="text/javascript">
       window.alert("No se encuentra articulo!");
       location.href="<?php echo $index; ?>";
      </script>
      <?php

    }
}

if ($tipo == 9) {
	$sub = strip_tags(trim($_POST['comen'])); //comentario realizado por el usuario

	$fecha = getdate(); //aca iria la fecha por defecto y luego segun la busqueda seleccionada
	$fecha = date("d/m/Y H:i:s"); // da formato a la fecha como en la base

	$correoadmin = $_SESSION['loginusu']; //correo del usuario
	$num = $_SESSION['arti']; //numero del articulo comentado

	  if (empty($sub)){

	    ?>
	        <script type="text/javascript">
	         window.alert("Debe escribir un comentario!")
	         location.href="<?php echo $index; ?>";
	        </script>

	    <?php

	  }else{


	  $obj = new articulo ($num,'',$sub,'','','','','','','','',$fecha,$correoadmin); //la cantidad de elementos de la clase
	  $datos_u = $obj->comenta($num,'',$sub,'','','','','','','','',$fecha,$correoadmin);


	    if(empty($datos_u[0])){

	        ?>

	        <script type="text/javascript">
	         location.href="<?php echo $handler;?>?estado=5&num=<?php echo $num?>";
	        </script>

	        <?php
	    }else{

	          ?>

	          <script type="text/javascript">
	            window.alert("Error al comentar");
	            location.href="<?php echo $index; ?>";
	          </script>

	          <?php

	          }

	    }
}

if ($tipo == 11) {
	$fecha = $_GET['fecha'];
	$correoadmin = $_SESSION['loginusu'];
	$num = $_SESSION['arti'];
	$obj = new articulo ('','','','','','','','','','','',$fecha,$correoadmin); //la cantidad de elementos de la clase
	$datos_u = $obj->delcom('','','','','','','','','','','',$fecha,$correoadmin);

	    if(empty($datos_u[0])){

	        ?>

	        <script type="text/javascript">
					 window.alert("Comentario eliminado correctamente");
	         location.href="<?php echo $handler;?>?estado=5&num=<?php echo $num?>";
	        </script>

	        <?php
	    }else{

	          ?>

	          <script type="text/javascript">
	            window.alert("Error al borrar");
	            location.href="<?php echo $index; ?>";
	          </script>

	          <?php

	          }
}

if ($tipo == 13) {

	$num = $_SESSION['arti'];

	$obj = new articulo ($num,'','','','','','','','','','','',''); //la cantidad de elementos de la clase
	$datos_u = $obj->megusta($num,'','','','','','','','','','','','');

	    if(empty($datos_u[0])){

	        ?>

	        <script type="text/javascript">
	         location.href="<?php echo $handler;?>?estado=5&num=<?php echo $num?>";
	        </script>

	        <?php
	    }else{

	          ?>

	          <script type="text/javascript">
	            window.alert("Error de me gusta!");
	            location.href="<?php echo $index; ?>";
	          </script>

	          <?php

	          }

}
// El estado es de donde viene la funcion del usuario, asi enviamos a cada proceso del sistema

// 0 - Login de usuario
// 1 - Modificar usuario
// 2 - Terminado de la modificacion de usuario
// 3 - Crear nuevo usuario
// 4 - Cerrar sesion
// 5 - Lista un articulo determinado
// 6 - Carga la busqueda de portada si vine del index
// 7 - Carga articulos segun seccion seleccionada
// 8 - Carga la busqueda realizada en el encabezado de la pagina
// 9 - Realizar un comentario en un articulo determinado por un usuario registrado
// 10 - Procesa el envio de correo electronico a los administradores del sitio (Ventana Contacto)
// 11 - Elimina un comentario segun el usuario que lo realizo
// 12 - Carga los datos del usuario para luego ir al perfil
// 13 - Funcion de dar me gusta un articulo
// 14 - Elimina usuario (solo cambia valor de activo no lo borra de la base)



/*
if ($tipo == 0){
  include('../logica/procesarLogin.php');
}

if ($tipo == 1){
  include('../logica/procesarListausu.php');
}

if ($tipo == 2){
  include('../logica/procesarModi.php');
}

if ($tipo == 3){
  include('../logica/procesarNuevo.php');
}

if ($tipo == 4){
  include('../logica/cerrarSes.php');
}

if ($tipo == 5){
  include('../logica/procesarListaart.php');
}

if ($tipo == 6){
  include('../logica/procesarArt.php');
}

if ($tipo == 7){
  include('../logica/procesarSeccion.php');
}

if ($tipo == 8){
  include('../logica/procesarBusqueda.php');
}

if ($tipo == 9){
  include('../logica/procesarCom.php');
}

if ($tipo == 10){
  include('../logica/procesarcontacto.php');
}

if ($tipo == 11){
  include('../logica/procesardelcom.php');
}

if ($tipo == 12){
  include('../logica/procesarListausu.php');
}

*/
 ?>
