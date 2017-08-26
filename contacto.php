<?php
//carga el menu de otro archivo para ahorrar codigo
require_once('menu.php');
 ?>
<title>Contactos</title>

<h1> Ingrese informacion de contacto</h1>
 <div class="content_area">
   <div align="center">
     <div class="left_coloum floatleft">

<!-- Aca empieza el cosito del login -->
      <div align="center">
        <div>
          <div class="news-letter">
            <h2>Ingrese usuario</h2>
            <p>Ingrese sus datos de usuario para poder enviar consulta!</p>
            <form action="#" method="post">
              <input type="text" placeholder="Correo electronico" id="email" />
              <input type="password" placeholder="Contrasena" id="email" />
              <textarea rows=10 cols=50 placeholder="Consulta" ></textarea>
              <input type="submit" value="Ingresar" id="form-submit" />
            </form>
          </div>
        </div>
<!-- Aca termina -->

<!-- Aca empieza la publicidad -->
      </div>
    </div>
    </div>
<!-- Aca termina -->


<div class="content_area">
  <div class="">
    <div class="left_coloum floatleft">

    </div>
  </div>
</div>

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
