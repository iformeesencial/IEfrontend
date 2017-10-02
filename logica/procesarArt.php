<?php

include('../clases/articulo.php');

  $obj = new articulo ('','','','','','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $obj->listarport('','','','','','','','','','','');
  //  $datos_p = $obj->listarticulo('','','','','','','','','','','');

    if(!empty($datos_u[0])){
      $_SESSION['port']=$datos_u;
      
        ?>
        <script type="text/javascript">
         location.href="http://localhost/index.php";
        </script>
        <?php

    }

?>