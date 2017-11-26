<?php
require_once("$menu");

  if (!isset($_SESSION['seccion'])) {

        ?>
        <script type="text/javascript">
          window.alert("Error de carga");
        </script>
        <?php
        exit();

      }else{
        if(isset($_SESSION['seccion'])){
              if(!empty($_SESSION['seccion'])){
                $array = $_SESSION['seccion'];
                $val = count($array);
 ?>

<title>Categoria</title>
    <div id="main">
      <div class="container">

<!-- Aca termina el coso de las imagenes que pasan -->

        <div class="row mar-top-80">

          <div class="col-md-12">
            <h3 align="center"></h3>
            <?php
              for ($i = 0; $i < 1; $i ++){ //Toma el nombre de catergoria para mostrarlo en el titulo
                if (!empty($array[0]['nombrecat'])) {
                                  
            ?>

            <h3 align="center">Resultado de categoria <?php echo $array[0]['nombrecat'];?></h3>

            <?php
              }else{

                ?>

                <h3 align="center">Resultado de Busqueda:</h3>

                <?php

              }

              }
            ?>
          </div>

        <!-- Publicidad de las chiquitas -->
          <div class="col-md-3">
            <h3><strong>Publicidad1</strong></h3>
            <a href="#"><img src="<?php echo $img;?>add1.png"></a>
          </div>

            <?php
                for ($i = 0; $i < $val; $i ++){
            ?>
          <div class="col-md-7">
              <h3></h3>
              <a href="<?php echo $handler;?>?estado=5&num=<?php echo $array[$i]['numero'];?>"><h3><?php echo $array[$i]['titulo'];?></h3></a>
              <p><?php echo $array[$i]['resumen'];?></p>
              <font font="Browallia New" size=2> Autor: <?php echo $array[$i]['correoadmin'];?></font>
              <br>
              <font font="Browallia New" size=2> Publicado: <?php echo $array[$i]['fecha_crea'];?></font>
              
              <br>

              <font font="Browallia New" size=2 color=red> Megusta: <?php echo $array[$i]['cantlike_articulo'];?></font>
              <font font="Adobe Arabic" size=2 color=red> Compartir: <?php echo $array[$i]['cantcomp_articulo'];?></font>
              <font font="Adobe Arabic" size=2 color=red> Comentarios (<?php echo $val;?>) </font>
            <!-- </form> -->
          </div>

          <?php
                  }
                }
              }
              ?>
<!-- Publicidad de las largas -->
          <div class="col-md-12" align="center">
            <p></p>
            <a href="#"><img src="<?php echo $img;?>noticias.gif" align="center"></a>
          </div>
        </div>

        <div class="row mar-top-80">
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
                <h4>Info</h4>
                <p>Acceda a los articulos mas visitado por nuestros lectores</p>
              </div>
            </div>
          </div>

          <!-- Publicidad de las largas -->
                    <div class="col-md-12">
                      <p></p>
                      <img src="<?php echo $img;?>  noticias.gif" align="center">
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
