<?php
require_once('menu.php');
 ?>
<title>Internacional</title>
<h1> Noticias Internacionales</h1>
 <div class="slider_area">
   <div class="slider">
     <ul class="bxslider">
       <li><img src="images/estadio.jpg" title="Surfear es lo mas caca" /></li>
       <li><img src="images/baca.jpg" title="Cada vez somos mas pobres" /></li>
       <li><img src="images/uruguay.jpg" title="Esta re loquitax" /></li>
     </ul>
   </div>
 </div>

<!-- Aca empieza las noticias mas destacadas del deporte -->
  <!-- esto es para el centrado de las columnas -->
    <div class="content_area">
      <div class="main_content floatleft">
        <div class="rigth_coloum floatleft">
  <!-- esto es para el centrado de las columnas -->

    <div class="news-letter">
      <h2>Realizar busqueda</h2>
      <p>Ingrese los filtros para realizar la busqueda</p>

      <form action="articulo.php" method="post">
        <input type="text" placeholder="Titulo de la noticia" id="name" />

        Categoria:
        <select type="text" name="transporte">
          <option>Deporte</option>
          <option>Informacion</option>
          <option>Salud</option>
          <option>Salud</option>
          <option>Salud</option>
          <option>Salud</option>
          <option>Salud</option>
        </select>

        <input type="text" placeholder="Autor" id="name" />
        Fecha de edicion :
        <input type="date" step="1" min="2017-01-01" value="<?php echo date("Y-m-d");?>"/>

          <div class="content_area">
            <div class="">
              <div class="left_coloum floatleft">
              </div>
            </div>
          </div>

        <input type="submit" value="Buscar" id="form-submit" />
      </form>
    </div>

  </br>

          <div class="single_left_coloum_wrapper">
            <h2 class="title">Lo mas destacado</h2>
            <a class="more" href="#">more</a>

            <!-- una noticia -->
            <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
              <h3>Jugador Gay</h3>
              <p>Texto Texto Texto Texto.</p>
              <a class="readmore" href="#">Ver noticia</a> </div>
            <!-- fin de una noticia -->

            <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
                <h3>Es horrible jugando</h3>
                <p>Texto Texto Texto Texto.</p>
                <a class="readmore" href="#">Ver noticia</a> </div>

            <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
              <h3>Se retira por perro</h3>
              <p>Texto Texto Texto Texto.</p>
              <a class="readmore" href="#">Ver noticia</a> </div>

            <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
              <h3>Juega con muletas</h3>
              <p>Texto Texto Texto Texto.</p>
              <a class="readmore" href="#">Ver noticia</a> </div>

            <div class="single_left_coloum floatleft"> <img src="images/single_featured.png" alt="" />
                <h3>No va nadie a verlos porque son horribles</h3>
                <p>Texto Texto Texto Texto.</p>
                <a class="readmore" href="#">Ver noticia</a> </div>

          </div>
<!-- Aca termina -->


<!-- Aca empeiza seccion de imagenes -->
          <div class="single_left_coloum_wrapper gallery">
            <h2 class="title">Galeria</h2>
            <a class="more" href="#">more</a> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> <img src="images/single_featured.png" alt="" /> </div>
<!-- Aca termina -->

        </div>
      </div>


<!-- Aca empieza el cosito del login -->
      <div class="sidebar floatright">

        <!-- Aca esta la publicidad1 -->
        <div class="single_sidebar"> <img src="images/suarez.gif" alt="" /> </div>
        <!-- Aca termina -->

        <div class="single_sidebar">
          <div class="news-letter">
            <h2>Ingrese usuario</h2>
            <p>Ingrese de forma rapida para poder comentar y compartir noticias!</p>
            <form action="#" method="post">
              <input type="text" placeholder="Nombre de usuario" id="name" />
              <input type="text" placeholder="Correo electronico" id="email" />
              <input type="submit" value="Ingresar" id="form-submit" />
            </form>
          </div>
        </div>
<!-- Aca termina -->

<!-- Aca empieza lo mas visto (abajo del login) -->
        <div class="single_sidebar">
          <div class="popular">
            <h2 class="title">Lo mas destacado</h2>
            <ul>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
              <li>
                <div class="single_popular">
                  <p>Sept 24th 2045</p>
                  <h3>Lorem ipsum dolor sit amet conse ctetur adipiscing elit <a href="#" class="readmore">Read More</a></h3>
                </div>
              </li>
            </ul>
            <a class="popular_more">more</a> </div>
        </div>
<!-- Aca termina -->


<!-- Aca empieza la publicidad -->
        <h2 class="title">Publicadad deportiva</h2>
        <div class="single_sidebar"> <img src="images/suarez.gif" alt="" /> </div>
        <div class="single_sidebar">
          <h2 class="title">Publicadad2</h2>
          <img src="images/add2.png" alt="" /> </div>
      </div>
    </div>
    <div class="footer_top_area">
      <div class="inner_footer_top"> <img src="images/noticias.gif" alt="" /> </div>
    </div>
<!-- Aca termina -->


<!-- Aca empieza las categorias chiquitas del pie de pagina -->
    <div class="footer_bottom_area" align="center">
      <div class="footer_menu">
        <ul id="f_menu">
          <li><a href="#">Internacionales</a></li>
          <li><a href="deporte.php">Deportes</a></li>
          <li><a href="#">Tecnologia</a></li>
          <li><a href="#">Negocios</a></li>
          <li><a href="#">Cine</a></li>
          <li><a href="#">Cultura</a></li>
          <li><a href="#">blogs</a></li>
          </ul>
      </div>
      <div class="copyright_text">
        <p>Copyright &copy; 2017 Informe Esencial Todos los derechos reservados | Design by Nachito</a></p>
        <p>Informe Esencial se reserva estrictamente de que no se hace cargo de nada.</p>
      </div>
    </div>
<!-- Aca termina -->


  </div>
</div>
<script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.bxslider.js"></script>
<script type="text/javascript" src="assets/js/selectnav.min.js"></script>
<script type="text/javascript">
selectnav('nav', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
selectnav('f_menu', {
    label: '-Navigation-',
    nested: true,
    indent: '-'
});
$('.bxslider').bxSlider({
    mode: 'fade',
    captions: true
});
</script>
</body>
</html>
