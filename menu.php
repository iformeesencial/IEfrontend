<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" type="text/css" href="assets/font/font-awesome.min.css" />
<link rel="stylesheet" type="text/css" href="assets/font/font.css" />
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen" />
<link rel="stylesheet" type="text/css" href="assets/css/jquery.bxslider.css" media="screen" />
</head>
<body>
<div class="body_wrapper">
  <div class="center">
    <div class="header_area">

      <div class="logo floatleft">
        <p class="single_cat_left_content_meta">Edicion del dia: <?php echo date("d/m/Y");?></p>
        <a href="index.php"><img src="images/ie.png" width="150" height="150"/></a>
      </div>

      <div class="top_menu floatleft">
        <ul>
          <li><a href="index.php">Inicio</a></li>
          <li><a href="contacto.php">Contactanos</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="login.php">Cerrar Sesion</a></li>
        </ul>
      </div>
      <div class="social_plus_search floatright">
        <div class="social">
          <ul>
            <li><a href="#" class="facebook"></a></li>
            Cambiar Edicion:
            <input type="date" step="1" min="2017-01-01" value="<?php echo date("Y-m-d");?>"/>
            <input type="submit" id="searchform" value="Ver" />
          </ul>
        </div>
        <div class="search">
          <form action="#" method="post" id="search_form">
            <input type="text" value="Buscar noticias" id="s" />
            <input type="submit" id="searchform" value="search" />
            <input type="hidden" value="post" name="post_type" />
          </form>
        </div>
      </div>
    </div>

    <!-- Aca comienza el encabezado de las categorias principales -->
    <div class="main_menu_area">
      <ul id="nav">
        <li><a href="#">Secciones</a>
          <ul>
            <li><a href="internacional.php">Internacional</a></li>
            <li><a href="economia.php">Economia</a></li>
            <li><a href="entretenimiento.php">Entretenimiento</a></li>
            <li><a href="social.php">Sociales</a></li>
            <li><a href="estilo.php">Estilo</a></li>
          </ul>
        </li>

        <li><a href="agro.php">Agro</a></li>

        <li><a href="deporte.php">Deportes</a>
          <ul>
            <li><a href="#">Futbol</a></li>
            <li><a href="#">Tenis</a></li>
            <li><a href="#">Rugby</a></li>
            <li><a href="#">Golf</a></li>
            <li><a href="#">Otros</a></li>
          </ul>
        </li>

        <li><a href="tecnologia.php">Tecnologia</a>
          <ul>
            <li><a href="#">Telefonia</a></li>
            <li><a href="#">Informatica</a></li>
            <li><a href="#">Audiovisual</a></li>
            <li><a href="#">Otros</a></li>
          </ul>
        </li>

          <li><a href="cine.php">Cine</a>
          <ul>
            <li><a href="#">Estrenos</a></li>
            <li><a href="#">Lo mas visto</a></li>
            <li><a href="#">Proximos Estrenos</a></li>
          </ul>
        </li>

        <li><a href="espectaculo.php">Espectaculo</a></li>

        <li><a href="cultura.php">Cultura</a>
        <ul>
          <li><a href="#">Dietas</a></li>
          <li><a href="#">Comer sano</a></li>
          <li><a href="#">Problemas alimenticios</a></li>
          <li><a href="#">Tips</a></li>
          <li><a href="#">Lo mas destacado</a></li>
        </ul>
        </li>

        <li><a href="salud.php">Salud</a>
          <ul>
            <li><a href="#">Dietas</a></li>
            <li><a href="#">Comer sano</a></li>
            <li><a href="#">Problemas alimenticios</a></li>
            <li><a href="#">Tips</a></li>
            <li><a href="#">Lo mas destacado</a></li>
          </ul>
        </li>
        <li><a href="#">Blog</a></li>
        <li><a href="perfil.php">Perfil</a></li>
      </ul>
    </div>
<!-- Aca termina -->
