<!DOCTYPE html>

<html lang="es">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>
    <!-- Main CSS -->
    <link rel="stylesheet" href="./estilo/style.css" type="text/css">

    <meta property="og:url"           content="http://localhost/Esencial/fb-callback.php" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="Your Website Title" />
    <meta property="og:description"   content="Your description" />
    <meta property="og:image"         content="http://www.your-domain.com/path/image.jpg" />

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
            <a href="index.php"><img src="./img/ie.png" width="200" height="200"></a>
          </div>

          <div class="col-md-6" align="center">
            <h3>Informe Esencial -Portada 1/1/2017-</h3>
            <li class="list-inline-item">
              <a href="index.php">Portada</a>
            </li>
            <li class="list-inline-item">
              <a href="login2.php">Ingresar</a>
            </li>
            <li class="list-inline-item">
              <a href="registro.php"><font color=red>Registrarse</font></a>
            </li>
            <li class="list-inline-item">
              <a href="contacto.php">Contactos</a>
            </li>

              <br>
              <br>

            <li class="list-inline-item">
              <input type="text" name="" value="" class="textbox" placeholder="Buscar Articulo">
              <input type="submit" name="Buscar" value="Buscar" class="button">
            </li>

          </div>


<!-- Es donde esta el coso de las redes sociales -->
          <div class="col-md-3">
            <ul class="social-header list-inline text-xs-right">

              <li class="list-inline-item">
                <a href="login.php">
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
              <li class="list-inline-item">
                <a href="#">
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                      </span>
                  </a>
              </li>
            </ul>
          </div>

<!-- Es donde esta el coso de buscar -->
          <div class="col-md-3">
            <ul class="social-header list-inline text-xs-right">
              <li class="list-inline-item">
                <p><strong><font color=red>Buscar por edicion:</font></strong></p>
                <input type="date" name="" value="" class="textbox2"> <input type="submit" name="Buscar" value="Buscar" class="button">
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
                  <a href="categorias.php">Destacados</a>
                </li>
                <li class="list-inline-item">
                  <a href="categorias.php">Deporte</a>
                </li>
                <li class="list-inline-item">
                  <a href="categorias.php">Cultura</a>
                </li>
                <li class="list-inline-item">
                  <a href="categorias.php">Tecnologia</a>
                </li>
                <li class="list-inline-item">
                  <a href="categorias.php">Sociales</a>
                </li>
                <li class="list-inline-item">
                  <a href="categorias.php">Cine</a>
                </li>
                <li class="list-inline-item">
                  <a href="categorias.php">Salud</a>
                </li>
                <li class="list-inline-item">
                  <a href="categorias.php">Internacional</a>
                </li>
                <li class="list-inline-item">
                  <a href="categorias.php">Economia</a>
                </li>
                <li class="list-inline-item">
                  <a href="https://informeesencial.wordpress.com/" target="_blank">Blog</a>
                </li>
                <li class="list-inline-item">
                  <a href="perfil.php">Perfil</a>
                </li>

            </ul>
        </nav>
      </div>
    </header>
