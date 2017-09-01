<?php
//carga el menu de otro archivo para ahorrar codigo
require_once('menu.php');
 ?>
<title>Suscripcion</title>

<h1>Formulario de registro de usuario</h1>
 <div class="content_area">
   <div align="center">
     <div class="left_coloum floatleft">

<!-- Aca empieza el cosito del login -->
      <div align="center">
        <div>
          <div class="news-letter">
            <h2>Ingrese datos de usuario</h2>
            <p>Ingrese sus datos de usuario para poder registrarse en el sitio!</p>
            <form action="#" method="post">

              <input type="text" placeholder="Nombre" id="name" />
              <input type="text" placeholder="Apellido" id="name" />
              <input type="text" placeholder="Correo electronico" id="email" />
              <input type="text" placeholder="Teléfono" id="name" />
                <p>Tipo de suscripcion</p>
                <input type="radio" name="group1" value="1" checked>Suscripcion1<br>
                <input type="radio" name="group1" value="2">Suscripcion2<br>
                <input type="radio" name="group1" value="2">Suscripcion3<br>
                <input type="radio" name="group1" value="2">Suscripcion4<br>

                <div class="content_area">
                  <div class="">
                    <div class="left_coloum floatleft">

                    </div>
                  </div>
                </div>

              <input type="password" placeholder="Contrasena" id="name" />
              <input type="password" placeholder="Confirma Contrasena" id="name" />
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
