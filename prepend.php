<?php
//INICIO DE SESION Y VARIABLES DE SESION
session_start();
$SESSION['logged']=false;

//conexion a la base de datos
class conexion {
  function conectar(){
  $dsn = 'mysql:dbname=esencial;host=127.0.0.1';
  $usuario = 'root';
  $contraseña = '';
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
