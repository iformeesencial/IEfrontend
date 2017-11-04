<?php
//INICIO DE SESION Y VARIABLES DE SESION
session_start();
/*
$SESSION['logged']=''; //Variable del logueo
$SESSION['port']=''; //Variable utilizada para mostrar portada
$SESSION['arti']=''; //Variable utilizada para mostrar articulo
$SESSION['todo']=''; // Variable de session para cargar todos los articulos en la portada
$SESSION['seccion']=''; //Variable que toma la seccion que el usuario selecciona
$SESSION['dato']=''; //Variable utilizada para cargar los comentarios segun articulo seleccionado
$SESSION['usuario']=''; //Variable que carga los comentarios segun usuario, es utilizada para mostrar el contenido de los mismos
$SESSION['loginusu']=''; //Variable que toma el correo del usuario logueado
$SESSION['modi']=''; //Variablle utilziada para cargar los datos del usuario y utilizarla para modificar los mismos (modiusu)
*/

//Variables externas al servidor FRONTEND
$img = 'http://www.informeesencial.com/img/'; //Ruta donde se encuentran las imagenes del sitio
$blog = 'http://www.iewordpress.com'; //Direccion del servidor wordpress
$logo = 'http://www.informeesencial.com/img/ie.png'; //logo del sitio
$logo2 = 'http://www.informeesencial.com/img/ie2.png'; //logo del sitio dos el cual da efecto al logo cuando pasa el mouse
$bcss = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css'; //Estilo Bootstrap externo
$gfont = 'https://fonts.googleapis.com/css?family=Roboto:400,500,700'; //Fuente externa de google
$jv = 'https://use.fontawesome.com/025d1f53df.js'; //Funcion java script externas

//Variable dentro del servidor FRONTEND
$flocal = 'http://localhost/Esencial/fb-callback.php'; //Archivo local para el login de facebook
$estilo = 'estilo/style.css'; //Carpeta donde se encuentra el estilo de la pagina
$handler = './form_handler.php'; //archivo donde se reenvia al proceso segun donde el usuario este interactuando

$index = 'index.php'; //Pantalla index del sitio
$menu = 'menu.php'; //archivo menu de presentacion, encabezado de pagina
$pie = 'pie.php'; //Pie de pagina 1
$pie2 = 'pie2.php'; //Pie de pagina 2
$login = 'login.php'; //Login mediante facebook
$login2 = 'login2.php'; //Login local del sitio (a la base de datos)
$art = 'articulo.php'; //Pagina del articulo generica
$cat = 'categorias.php'; //Pagina segun categoria generica
$cont = 'contacto.php'; //Pagina de contacto
$modiusu = 'modiusu.php'; //Pagina de modificacion de usuario generica
$perfil = 'perfil.php'; //Pagina de perfil de usuario generica
$reg = 'registro.php'; //Pagina de registro de usuario

//conexion a la base de datos
class conexion {
  function conectar(){
  $dsn = 'mysql:dbname=esencial;host=127.0.0.1';
  //$dsn = 'mysql:dbname=esencial;host=192.168.1.152:3306';
  $usuario = 'root';
  $contraseña = '';
  //$contraseña = 'Nacho12345.';
  try {
      $gbd = new PDO($dsn, $usuario, $contraseña);
      $gbd->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
      $gbd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $gbd;
    }
  catch (PDOException $e) {
      echo 'Falló la conexión: ' . $e->getMessage();
    }
  }
}

 ?>
