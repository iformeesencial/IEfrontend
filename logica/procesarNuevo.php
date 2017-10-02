<?php

include('../clases/usuario.php');

//trim elimina los espacion en blanco
$nombre = strip_tags(trim($_POST['nombre']));
$apellido = strip_tags(trim($_POST['apellido']));
$correo = strip_tags(trim($_POST['correo']));
$tel = strip_tags(trim($_POST['tel']));

$contrasena = strip_tags(trim($_POST['contrasena']));
$contrasena2 = strip_tags(trim($_POST['contrasena2']));
$contrasena = md5($contrasena);
$contrasena2 = md5($contrasena2);


$tipo = strip_tags(trim($_POST['tipo']));
$estado = "Activo";

//Confirma que las contraseñas coicidan!
if ($contrasena == $contrasena2) {

    $obj = new Usuario ('','','','','','',''); //la cantidad de elementos de la clase
    $datos_u = $obj->alta($nombre,$apellido,$correo,$tel,$contrasena,$tipo,$estado);

}else{

    ?>

      <script type="text/javascript">
        window.alert("Las contraseñas no coinciden");
        location.href = "http://localhost/registro.php";
      </script>

    <?php

}

  if(!empty($datos_u)){
    ?>

    <script type="text/javascript">
      var j = "<?php echo $correo; ?>";
      window.alert("EL CORREO " + j + " YA EXISTE!");
      location.href = "http://localhost/registro.php";
    </script>

    <?php

}

else{

  ?>

  <script type="text/javascript">
    var j = "<?php echo $correo; ?>";
    window.alert("Usuario " + j + "creado correctamente");
    location.href = "http://localhost/index.php";
  </script>

  <?php

}

?>
