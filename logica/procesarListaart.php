<?php

include('../clases/articulo.php');
include('../clases/usuario.php');
	
  $num = $_SESSION['numart'];

  $obj = new articulo ('','','','','','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $obj->listarticulo($num,'','','','','','','','','','');

  $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
  $datos_p = $obj->cargacom('','','','','','','');
  
  var_dump($num); 	        

    if(!empty($datos_u[0])){
      $_SESSION['dato']=$datos_u;
      $_SESSION['usuario']=$datos_p;
  
        ?>

        <script type="text/javascript">
         //location.href="http://localhost/articulo.php";
        </script>

        <?php

    }else{

      ?>
      <script type="text/javascript">
       window.alert("No se encuentra articulo!");
       location.href="http://localhost/index.php";
      </script>
      <?php

    }

?>