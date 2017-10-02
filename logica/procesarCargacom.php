<?php

include('../clases/usuario.php');

  $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $obj->cargacom('','',$correo,'','','','');
 	
    if(!empty($datos_u[0])){
    $_SESSION['dato']=$datos_u;

    ?>
    <script type="text/javascript">
     location.href="http://localhost/articulo.php";
    </script>
    <?php

  }  else{

    ?>
    <script type="text/javascript">
     window.alert("No se encuentra articulo!");
     location.href="http://localhost/index.php";
    </script>
    <?php

  }

?>