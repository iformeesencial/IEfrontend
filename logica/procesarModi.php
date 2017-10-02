<?php

include('../clases/usuario.php');

  //trim elimina los espacion en blanco
  $correo = $_SESSION['loginusu'];
  $nombre = strip_tags(trim($_POST['nombre']));
  $apellido = strip_tags(trim($_POST['apellido']));
  $telefono = strip_tags(trim($_POST['telefono']));
  $tipo = strip_tags(trim($_POST['tipo']));

  $obj = new Usuario ($nombre,$apellido,$correo,$telefono,'',$tipo,''); //la cantidad de elementos de la clase
  $datos_u = $obj->modiusu($nombre,$apellido,$correo,$telefono,'',$tipo,'');

  //var_dump($datos_u);
    if(empty($datos_u)){

        ?>

        <script type="text/javascript">
          window.alert("Se realizaron los cambios de forma correcta");
          location.href = "http://localhost/perfil.php";
        </script>

        <?php

      }else{

        ?>

        <script type="text/javascript">
          window.alert("Ocurrio un error");
          location.href = "http://localhost/modiusu.php";
        </script>

        <?php

    }

?>
