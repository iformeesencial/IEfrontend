<?php
$tipo = $_GET['estado']; //toma valor de la url

include('../clases/usuario.php');
include('../clases/articulo.php');
include('../clases/edicion.php');
// El estado es de donde viene la funcion del usuario, asi enviamos a cada proceso del sistema

// 0 - Login de usuario
// 1 - Modificar usuario
// 2 - Terminado de la modificacion de usuario
// 3 - Crear nuevo usuario
// 4 - Cerrar sesion
// 5 - Lista un articulo determinado
// 6 - Carga la busqueda de portada si vine del index
// 7 - Carga articulos segun seccion seleccionada
// 8 - Carga la busqueda realizada en el encabezado de la pagina
// 9 - Realizar un comentario en un articulo determinado por un usuario registrado
// 10 - Procesa el envio de correo electronico a los administradores del sitio (Ventana Contacto)
// 11 - Elimina un comentario segun el usuario que lo realizo
// 12 - Carga los datos del usuario para luego ir al perfil



/*
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

if ($tipo == 7){
  include('../logica/procesarSeccion.php');
}

if ($tipo == 8){
  include('../logica/procesarBusqueda.php');
}

if ($tipo == 9){
  include('../logica/procesarCom.php');
}

if ($tipo == 10){
  include('../logica/procesarcontacto.php');
}

if ($tipo == 11){
  include('../logica/procesardelcom.php');
}

if ($tipo == 12){
  include('../logica/procesarListausu.php');
}

*/
 ?>
