<?php

require_once('../clases/persona.php');
require_once('../logica/funciones.php');
sessionCheck();

//trim elimina los espacion en blanco
$correo = strip_tags(trim($_POST['correo']));
$contrasena = strip_tags(trim($_POST['contrasena']));
$contrasena = md5($contrasena);


    $conex = conectar();
    $u = new Persona ('','',$correo,'',$contrasena); //la cantidad de elementos de la clase
    $datos_u = $u->loginusu($conex);
    

  if(!empty($datos_u)){
    ?>

      <script type="text/javascript">
        window.alert("Correo enviado correctamente");
        location.href = "../presentacion/index.php";
      </script>

    <?php

}else{

      ?>

      <script type="text/javascript">
        var j = "<?php echo $correo; ?>";
        window.alert("Usuario " + " " + j + " " + " y/o contraseña incorrecta");
        location.href = "../presentacion/contacto.php";
      </script>

      <?php

    }

?>