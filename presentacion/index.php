<?php
require_once("$menu");

    if (!isset($_SESSION['port'])) {

        ?>
        <script type="text/javascript">
          location.href = "<?php echo $handler;?>?estado=6";
        </script>
        <?php
        exit();

        }else{
          if(isset($_SESSION['port'])){
                if(!empty($_SESSION['port'])){
                  $array = $_SESSION['port'];
                  $val = count($array);
        ?>

<title>Portada -Informe Esencial-</title>
    <div id="main">
      <div class="container">

<!-- Aca arranca el coso de las imagenes que pasan -->
        <div id="slider-home" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#slider-home" data-slide-to="0" class="active"></li>
            <li data-target="#slider-home" data-slide-to="1"></li>
            <li data-target="#slider-home" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner" role="listbox">

            <!-- Aca arranca uno -->
            <div class="carousel-item active">
              <img src="<?php echo $img;?>barca.png" alt="First slide">

              <div class="carousel-caption">

                <h2>Noticias al dia</h2>
                <img alt="Categoria de noticia" src="">
                <p class="h4">Cosas que pasan</p>
                <p>Vea esta noticia ahora.</p>
                <a href="#" class="btn btn-secondary">Ver noticia</a>
              </div>
            </div>
            <!-- Aca arranca termina -->

            <div class="carousel-item">
              <img src="<?php echo $img;?>estadio.png" alt="Second slide">

              <div class="carousel-caption">

                <h2>Noticias al dia</h2>
                <img alt="Categoria de noticia" src="">
                <p class="h4">Cosas que pasan</p>
                <p>Vea esta noticia ahora.</p>
                <a href="#" class="btn btn-secondary">Ver noticia</a>

              </div>

            </div>

            <div class="carousel-item">
              <img src="<?php echo $img;?>uruguay.png" alt="Third slide">

              <div class="carousel-caption">
                <h2>Noticias al dia</h2>
                <img alt="Categoria de noticia" src="">
                <p class="h4">Cosas que pasan</p>
                <p>Vea esta noticia ahora.</p>
                <a href="#" class="btn btn-secondary">Ver noticia</a>

              </div>

            </div>

          </div>
        </div>

<!-- Aca termina el coso de las imagenes que pasan -->

        <div class="row mar-top-80">
            <?php
                for ($i = 0; $i < $val; $i ++){
            ?>
          <div class="col-md-3">

            <a href="<?php echo $handler;?>?estado=5&num=<?php echo $array[$i]['numero'];?>"><h3><?php echo $array[$i]['titulo'];?></h3></a>
            <p><?php echo $array[$i]['sub_titulo'];?>.</p>
            <font font="Browallia New" size=2> By: <?php echo $array[$i]['correoadmin'];?></font>
            <br>
            <!-- <a href="<?php echo $login2;?>"><font color=red>Megusta</a></font> -->

            <!-- Me gusta a una pagina -->
            <!-- <div class="fb-like" data-href="https://www.facebook.com/Informe-Esencial-1911389689184461/" data-layout="box_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div> -->
            <!-- Compartir una pagina -->
            <!-- <div class="fb-share-button" data-href="https://informeesencial.wordpress.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FInforme-Esencial-1911389689184461%2F&amp;src=sdkpreparse">Compartir</a>
            </div> -->
            </div>

              <?php
                  }
                }
              }
              ?>

            <div class="col-md-3">
              <a href="#"><h3>Noticia destacada 3 </h3></a>
              <p>Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Estoes una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.</p>

              <font font="Browallia New" size=2> By: Ignacio Gallardo</font>

              <br>
            </div>

<!-- Publicidad de pagina para facebook -->
            <div class="col-md-3">
              <div class="fb-page" data-href="https://www.facebook.com/Informe-Esencial-1911389689184461/" data-tabs="timeline" data-height="400" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                <blockquote cite="https://www.facebook.com/Informe-Esencial-1911389689184461/" class="fb-xfbml-parse-ignore">
                <a href="https://www.facebook.com/Informe-Esencial-1911389689184461/">Informe Esencial</a></blockquote>
              </div>

<!-- Compartir una pagina -->
              <div class="fb-share-button" data-href="https://informeesencial.wordpress.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FInforme-Esencial-1911389689184461%2F&amp;src=sdkpreparse">Compartir</a>
              </div>
            </div>

<!-- Publicidad de las largas -->
          <div class="col-md-12" align="center">
            <p></p>
            <a href="#"><img src="<?php echo $img;?>noticias.gif" align="center"></a>
          </div>
        </div>

        <div class="row mar-top-80">
          <div class="col-md-3">
            <h3>Noticia destacada 1</h3>
            <p>Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.</p>

            <font font="Browallia New" size=2> By: Ignacio Gallardo</font>

            <br>

          </div>

            <div class="col-md-3">
              <h3>Noticia destacada 2</h3>
              <p>Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.</p>

              <font font="Browallia New" size=2> By: Ignacio Gallardo</font>

              <br>
            </div>

            <div class="col-md-3">
              <h3>Noticia destacada 3 </h3>
              <p>Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.Esto es una noticia.</p>

              <font font="Browallia New" size=2> By: Ignacio Gallardo</font>

              <br>
              <!-- Me gusta a una pagina -->
              <div class="fb-like" data-href="https://www.facebook.com/Informe-Esencial-1911389689184461/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false">
              </div><!-- Compartir una pagina -->
              <br>
              <div class="fb-share-button" data-href="https://informeesencial.wordpress.com/" data-layout="button_count" data-size="small" data-mobile-iframe="true">
                  <a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.facebook.com%2FInforme-Esencial-1911389689184461%2F&amp;src=sdkpreparse">Compartir</a>
              </div>

              <!-- <a href="publicar.php"><h3>Probar Publicacion</h3></a> -->
            </div>

<!-- Publicidad de las chiquitas -->
            <div class="col-md-3">
              <h3><strong>Publicidad2</strong></h3>
              <img src="<?php echo $img;?>add2.png">

              <br>
              <br>

              <a href="#"><img src="<?php echo $img;?>add1.png"></a>
            </div>

            <!-- Publicidad intermedia -->
            <div class="col-md-12" align="center">
                <p></p>
                <img src="<?php echo $img;?>noticias.gif" align="center">
            </div>

        </div>

        <!-- Sector de noticias mas chiquito -->
        <div class="row mar-top-80">
          <div class="col-md-12" align="center">

            <h3 align="center"></h3>
            <h3 align="center">Noticias por categoria</h3>

              <?php

                if(isset($_SESSION['todo'])){
                    if(!empty($_SESSION['todo'])){
                      $array = $_SESSION['todo'];
                      $val = count($array);
                      for ($i = 0; $i < $val; $i ++){
              ?>
            <form action="<?php echo $handler;?>?estado=5" method="POST">
              <div class="col-sm-2">
                <h3></h3>
                <h3><?php echo $array[$i]['titulo'];?></h3>
                <p><?php echo $array[$i]['resumen'];?></p>

                <input type="text" style="visibility:hidden" name="num" value='<?php echo $array[$i]['numero'];?>'>
                <input type="submit" name="" value="Ver" class="button">
              </div>

            </form>
            <?php
                }
              }
            }
            ?>


          </div>
        </div>


        <div class="row mar-top-80" align="center">
          <div class="col-md-12">
            <h3></h3>
            <h3>Mas noticias</h3>

            <div class="row" align="center">
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery01.jpg" alt="Imagen 1" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery02.jpg" alt="Imagen 2" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
            </div>
          </div>

          <!-- Publicidad de las largas -->
            <div class="col-md-12">
                <p></p>
                <img src="<?php echo $img;?>noticias.gif" align="center">
            </div>
        </div>

        <?php
          require_once("pie2.php");
        ?>

      </div>

    </div>

    <?php
    }
      require_once("pie.php");
    ?>
