<?php
require_once("$menu");

  if (!isset($_SESSION['arti'])) {
    ?>
        <script type="text/javascript">
          window.alert("No se cargo articulo de forma correcta!");
          location.href = "<?php echo $index; ?>";
        </script>
        <?php

        exit();

      }else{

          if(isset($_SESSION['dato'])){
            if(!empty($_SESSION['dato'])){
            $array = $_SESSION['dato'];
            $array2 = $_SESSION['usuario'];
            $val = count($array2);
    ?>

<title>Articulo</title>
    <div id="main">
      <div class="container">

        <div class="row mar-top-80">
          <div class="col-md-9">
            <h3></h3>
            <h3><?php echo $array[0]['titulo'];?></h3>
            <img src="<?php echo $img;?>suarez.gif" alt="Imagen 1" class="img-fluid">
            <br>
            <p><strong><?php echo $array[0]['resumen'];?><br></strong></p>

            <h4><?php echo $array[0]['sub_titulo'];?></h4>

            <textarea class="estilotextarea2" name="name" rows="6" cols="80" maxlength="300" placeholder="Comentario" readonly align="left"><?php echo $array[0]['descripcion'];?></textarea>

            <br>
            <font font="Browallia New" size=2> Autor: <?php echo $array[0]['correoadmin'];?></font>

            <br>
            <font font="Browallia New" size=2>Fecha de articulo: <?php echo $array[0]['fecha_crea'];?></font>
            <br>

            <font font="Browallia New" size=2 color=red> Megusta: <?php echo $array[0]['cantlike_articulo'];?></font>
            <font font="Adobe Arabic" size=2 color=red> Compartir: <?php echo $array[0]['cantcomp_articulo'];?></font>
            <font font="Adobe Arabic" size=2 color=red> Comentarios (<?php echo $val;?>) </font>

            <br>
            <br>

            <?php
            if ((isset($_SESSION['loginusu']))){ //Se fija si esta seteada la variable

              ?>
            <form action="<?php echo $handler;?>?estado=13" method="POST">
              <input type="submit" name="<?php echo $_SESSION['arti']; ?>" value="Megusta" class="button2">
            </form>

            <?php
          }else{
          ?>
            <h3></h3>
            <font font="Browallia New" size=3>Debe iniciar sesion con su usuario del sitio para poder dar "me gusta".</font>
            <br>
            <a href="<?php echo $login2; ?>"><font font="Browallia New" size=3 color=blue>Ingresar al sitio ahora!.</font></a>
            <br>
            <br>
            <?php
            }
            ?>
            <h3></h3>
            <h3>Comentarios:  </h3>

            <?php

             for ($i = 0; $i < $val; $i ++){

            ?>
            <br>
            <font font="Browallia New" size=4><strong><?php echo $array2[$i]['correousu'];?></strong></font>
            <br>
            <font font="Browallia New" size=2><?php echo $array2[$i]['comentario'];?></font>
            <br>
            <font font="Browallia New" size=2>Fecha realizado: <?php echo $array2[$i]['fecha_coment'];?></font>
            <br>
            <br>

            <?php

            if ((isset($_SESSION['loginusu']))){ //Se fija si esta seteada la variable
              if ($_SESSION['loginusu'] == $array2[$i]['correousu']){ //Confirma si los correos corresponden

              ?>
              <form action="<?php echo $handler;?>?estado=11&fecha=<?php echo $array2[$i]['fecha_coment'];?>" method="POST">
                <input type="submit" name="Buscar2" value="Borrar" class="button2">
              </form>
              <br>

              <?php
              }
            }

            }

            if ((isset($_SESSION['loginusu'])) OR (isset($_SESSION['access_token']))) {

            ?>

            <h3></h3>
            <h3>Realiza tu comentario!</h3>

            <form action="<?php echo $handler;?>?estado=9" method="POST">

              <textarea class="estilotextarea" name="comen" id="comen" rows="4" cols="60" maxlength="150" placeholder="Comentario"></textarea>
              <br>
              <font font="Browallia New" size=2 color="red">Maximo 150 caracteres</font>
              <br>
              <input type="submit" value="Comentar" class="button">

            </form>
            <br>
            <br>

            <?php

                      }else{

                            // Sino esta logueado el usuario del sitio le pide que acceda para poder realizar un comentario

                            ?>

                            <h3></h3>
                            <h3>Realiza tu comentario!</h3>

                            <font font="Browallia New" size=3>Debe iniciar sesion con su usuario del sitio para poder realizar un comentario.</font>

                            <br>

                            <a href="<?php echo $login2; ?>"><font font="Browallia New" size=3 color=blue>Ingresar al sitio ahora!.</font></a>

                            <br>
                            <br>

                            <a href="<?php echo $login;?>"><img src="<?php echo $img;?>face.png"></a>

                            <br>
                            <br>

                            <a href="<?php echo $reg;?>"><font font="Browallia New" size=3 color=red>¿No estas registrado? ¡Registrate ahora!</font></a>

                            <?php
                          }

                      }

                    }

                 ?>
          </div>

            <!-- Publicidad de las chiquitas -->
            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Publicidad1</strong></h3>
              <a href="#"><img src="<?php echo $img;?>add1.png"></a>
            </div>

            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Publicidad1</strong></h3>
              <a href="#"><img src="<?php echo $img;?>add1.png"></a>
            </div>

            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Noticias destacadas</strong></h3>
              <font font="Browallia New" size=2>Articulo coso</font>
              <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
              <br>
              <font font="Browallia New" size=2>Articulo coso</font>
              <img src="<?php echo $img;?>gallery03.jpg" alt="Imagen 3" class="img-fluid">
            </div>

             <div class="col-md-12">
               <img src="<?php echo $img;?>noticias.gif" align="center">
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
                <img src=".<?php echo $img;?>gallery02.jpg" alt="Imagen 2" class="img-fluid">
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
        require_once("$pie2");
        ?>

      </div>
    </div>

    <?php
    }
    require_once("$pie");
     ?>
