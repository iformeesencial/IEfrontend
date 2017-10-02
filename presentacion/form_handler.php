<?php

// El estado es de donde viene la funcion del usuario, asi enviamos a cada proceso del sistema

// 0 - Login de usuario
// 1 - Modificar usuario
// 2 - Terminado de la modificacion de usuario
// 3 - Crear nuevo usuario
// 4 - Cerrar sesion
// 5 - Lista un articulo determinado
// 6 - Carga la busqueda de portada si vine del index

$tipo = $_GET['estado'];

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
 ?>
