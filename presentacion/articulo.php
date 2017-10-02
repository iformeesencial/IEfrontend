<?php
require_once("menu.php");

  if (!isset($_SESSION['arti'])) {
    ?>
        <script type="text/javascript">
          location.href = "http://localhost/index.php";
        </script>
        <?php

        exit();
      }else{

    ?>

<title>Articulo</title>
    <div id="main">
      <div class="container">

        <?php
          if(isset($_SESSION['dato'])){
            if(!empty($_SESSION['dato'])){
            $array = $_SESSION['dato'];
            $array2 = $_SESSION['usuario'];
            $val = count($array2);
        ?>

        <div class="row mar-top-80">

          <div class="col-md-9">
            <h3></h3>
            <h3><?php echo $array[0]['titulo'];?></h3>
            <img src="./img/suarez.gif" alt="Imagen 1" class="img-fluid">
            <br>
            <p><strong><?php echo $array[0]['resumen'];?></strong></p>

            <h4><?php echo $array[0]['sub_titulo'];?></h4>
            <p><?php echo $array[0]['descripcion'];?></p>

            <font font="Browallia New" size=2> By: Ignacio Gallardo</font>

            <br>
            <font font="Browallia New" size=2>Fecha de articulo: <?php echo $array[0]['fecha_articulo'];?></font>
            <br>

            <font font="Browallia New" size=2 color=red> Megusta: <?php echo $array[0]['cantlike_articulo'];?></font>
            <font font="Adobe Arabic" size=2 color=red> Compartir: <?php echo $array[0]['cantcomp_articulo'];?></font>
            <font font="Adobe Arabic" size=2 color=red> Comentarios (3) </font>

            <h3></h3>
            <h3>Comentarios:  </h3>

            <?php
             for ($i = 0; $i < $val; $i ++){

            ?>

            <font font="Browallia New" size=4><strong><?php echo $array2[$i]['correousu'];?></strong></font>
            <br>
            <font font="Browallia New" size=2><?php echo $array2[$i]['comentario'];?></font>
            <br>
            <font font="Browallia New" size=2>Fecha realizado: <?php echo $array2[$i]['fecha_coment'];?></font>
            <br>

            <?php
              }

            ?>

            <h3></h3>
            <h3>Realiza tu comentario!</h3>
            <textarea class="estilotextarea" name="name" rows="4" cols="60" maxlength="150" placeholder="Comentario"></textarea>
            <br>
            <font font="Browallia New" size=2 color="red">Maximo 150 caracteres</font>
            <br>
            <input type="submit" name="" value="Comentar" class="button">

            <br>
            <br>

            <?php

                      }
                    }
                 ?>
          </div>

<!-- Publicidad de las chiquitas -->
            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Publicidad1</strong></h3>
              <a href="#"><img src="./img/add1.png"></a>
            </div>

            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Publicidad1</strong></h3>
              <a href="#"><img src="./img/add1.png"></a>
            </div>

            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Noticias destacadas</strong></h3>
              <font font="Browallia New" size=2>Articulo coso</font>
              <img src="./img/gallery03.jpg" alt="Imagen 3" class="img-fluid">
              <br>
              <font font="Browallia New" size=2>Articulo coso</font>
              <img src="./img/gallery03.jpg" alt="Imagen 3" class="img-fluid">
            </div>

             <div class="col-md-12">
               <img src="./img/noticias.gif" align="center">
            </div>
        </div>

        <div class="row mar-top-80" align="center">
          <div class="col-md-12">
            <h3></h3>
            <h3>Mas noticias</h3>

            <div class="row" align="center">
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="./img/gallery01.jpg" alt="Imagen 1" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="./img/gallery02.jpg" alt="Imagen 2" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="./img/gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="./img/gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="./img/gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>
              <div class="col-sm-2">
                <p>Noticia</p>
                <img src="./img/gallery03.jpg" alt="Imagen 3" class="img-fluid">
                <p>Bla Bla Bla</p>
              </div>

            </div>
          </div>

          <!-- Publicidad de las largas -->
                    <div class="col-md-12">
                      <p></p>
                      <img src="./img/noticias.gif" align="center">
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
