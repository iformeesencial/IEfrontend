<?php

include('../clases/usuario.php');

  //trim elimina los espacion en blanco
  $correo = strip_tags(trim($_POST['correo']));
  $contrasena = strip_tags(trim($_POST['contrasena']));
  $contrasena = md5($contrasena);

    $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
    $datos_u = $obj->login('','',$correo,'',$contrasena,'','');

      if(!empty($datos_u)){
        $_SESSION['loginusu'] = $correo;
        ?>

        <script type="text/javascript">
          var j = "<?php echo $correo; ?>";
          window.alert("Bienvenido " + j);
          location.href = "http://localhost/perfil.php";
        </script>

        <?php

    }

      else{
        ?>

        <script type="text/javascript">
          window.alert("El Usuario o Password \n no es correcto.");
          location.href = "http://localhost/login2.php";
        </script>

        <?php

      }

?>
