<!DOCTYPE html>

<html lang="es">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $bcss;?>" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="<?php echo $gfont;?>" rel="stylesheet">
    <!-- Font Awesome CDN --> 
    <script src="<?php echo $jv;?>"></script>
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo $estilo;?>" type="text/css">


    <!-- Para conectar con facebook y dar megusta y compartir -->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.10&appId=1868377656824708";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


  </head>
  <body>
    <header>
      <div class="container">
        <div class="row">

          <div class="col-md-3">
            <a href="<?php echo $index;?>"><img src="<?php echo $logo;?>" onmouseover="this.src='<?php echo $logo2;?>'" onmouseleave="this.src='<?php echo $logo;?>'" width="200" height="200"></a>
          </div>

          <?php
            if(isset($_SESSION['port'])){
                if(!empty($_SESSION['port'])){
                  $array = $_SESSION['port'];
                  for ($i = 0; $i < 1; $i ++){
          ?>
          <div class="col-md-6" align="center">
            <h3>Informe Esencial <font color=red>-Portada <?php echo $array[$i]['fecha_edi'];?>-</font></h3>
            <li class="list-inline-item">
              <a href="<?php echo $index;?>">Portada</a>
            </li>

            <?php
          }
        }
      }

          if ((isset($_SESSION['loginusu'])) OR (isset($_SESSION['access_token']))) {

        ?>
            <li class="list-inline-item">
              <a href="<?php echo $perfil;?>">Perfil</a>
            </li>

        <?php

            }
            else{
              ?>
                <li class="list-inline-item">
                  <a href="<?php echo $login2;?>">Ingresar</a>
                </li>
            <?php

            }

            if ((isset($_SESSION['loginusu'])) OR (isset($_SESSION['access_token']))) {

            }else{
            ?>

            <li class="list-inline-item">
              <a href="<?php echo $reg;?>"><font color=red>Registrarse</font></a>
            </li>

            <?php
          }
             ?>
            <li class="list-inline-item">
              <a href="<?php echo $cont;?>">Contactos</a>
            </li>

              <br>
              <br>

            <li class="list-inline-item">

            <!-- Formulario de busqueda para buscar los articulos del sitio -->
              <form action="<?php echo $handler;?>?estado=8" method="POST">
                <input type="text" name="titulo" class="textbox" placeholder="Buscar Articulo" required>
                <input type="submit" name="Buscar" value="Buscar" class="button">
              </form>

            </li>

          </div>


<!-- Es donde esta el coso de buscar -->
          <div class="col-md-3">
            <ul class="social-header list-inline text-xs-right">
              <li class="list-inline-item">

              <form action="<?php echo $handler;?>?estado=6" method="POST">
                <p><strong><font color=red>Buscar por edicion:</font></strong></p>
                <input type="date" min="2017-09-27" max="<?php echo date('Y-m-d'); ?>" name="fechaedi" class="textbox2"
                value="<?php echo date('Y-m-d'); ?>" required>
                <input type="submit" name="Buscar" value="Buscar" class="button">
              </form>

              </li>
              </ul>
          </div>

<!-- Es donde esta el coso de las redes sociales -->
          <div class="col-md-3">
            <ul class="social-header list-inline text-xs-right">
              <li class="list-inline-item">
                <a href="<?php echo $login;?>">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-youtube fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>

            </ul>
          </div>

        </div>
      </div>

<!-- Es donde esta el menu navegable -->
      <div class="menu-bar text-xs-right">
        <nav class="container" role="menu">
          <ul class="menu-list list-inline">

                <li class="list-inline-item">
                  <a href="<?php echo $handler;?>?estado=7&seccion=Destacados">Destacados</a>
                </li>

                <li class="list-inline-item">
                  <a href="<?php echo $handler;?>?estado=7&seccion=Otros">Otros</a>
                </li>

                <li class="list-inline-item">
                  <a href="<?php echo $handler;?>?estado=7&seccion=Cultura">Cultura</a>
                </li>

                <li class="list-inline-item">
                  <a href="<?php echo $handler;?>?estado=7&seccion=Tecnologia">Tecnologia</a>
                </li>

                <li class="list-inline-item">
                  <a href="<?php echo $handler;?>?estado=7&seccion=Deportes">Deportes</a>
                </li>

                <li class="list-inline-item">
                  <a href="<?php echo $handler;?>?estado=7&seccion=Cine">Cine</a>

                </li>

                <li class="list-inline-item">
                  <a href="<?php echo $handler;?>?estado=7&seccion=Salud">Salud</a>
                </li>

                <li class="list-inline-item">
                  <a href="<?php echo $handler;?>?estado=7&seccion=Internacional">Internacional</a>
                </li>

                <li class="list-inline-item">
                  <a href="<?php echo $handler;?>?estado=7&seccion=Economia">Economia</a>
                </li>

                <li class="list-inline-item">
                  <a href="<?php echo $blog;?>" target="_blank">Blog</a>
                </li>

                <?php

                if ((isset($_SESSION['loginusu'])) OR (isset($_SESSION['access_token']))) {

                  ?>
                    <li class="list-inline-item">
                      <a href="<?php echo $perfil;?>">Perfil</a>
                    </li>

                <?php
                }
                else{
                  ?>
                    <li class="list-inline-item">
                      <a href="<?php echo $login2;?>">Ingresar</a>
                    </li>
                <?php

                }

                ?>

            </ul>
        </nav>
      </div>
    </header>
