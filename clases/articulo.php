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
								AND numero = numero;";
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
				$sql = "SELECT * FROM articulo,edicion,pertenece
								WHERE numero = numero
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
					$sql = "SELECT * FROM articulo,categoria,edicion
									WHERE nombrecat=:seccion
									AND fecha_crea=fecha_edi
									ORDER BY fecha_crea;";

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
  $fecha = "30/10/2017";
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
	         location.href="<?php echo $art; ?>";
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

	$obj = new articulo ('','','','','','','','','','','',$fecha,$correoadmin); //la cantidad de elementos de la clase
	$datos_u = $obj->delcom('','','','','','','','','','','',$fecha,$correoadmin);

	    if(empty($datos_u[0])){

	        ?>

	        <script type="text/javascript">
					 window.alert("Comentario eliminado correctamente");
	         location.href="<?php echo $art; ?>";
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
	         location.href="<?php echo $art; ?>";
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

?>
