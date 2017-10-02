<?php

include('../clases/usuario.php');


  $correo = $_SESSION['loginusu'];
  $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
  $datos_u = $obj->listausu('','',$correo,'','','','');

    if(!empty($datos_u[0])){
    $_SESSION['hola']=$datos_u;

    ?>
    <script type="text/javascript">
     location.href="http://localhost/modiusu.php";
    </script>
    <?php

  }  else{

    ?>
    <script type="text/javascript">
     window.alert("No a iniciado sesion!");
     location.href="http://localhost/login2.php";
    </script>
    <?php

  }

?>
