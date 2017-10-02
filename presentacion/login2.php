<?php
require_once("../presentacion/menu.php");
 ?>

<title>Ingreso</title>

    <div id="main">
      <div class="container">

        <div class="row mar-top-80" align="center">

          <div class="row mar-top-80" align="center">
          <!-- Publicidad de las largas -->
                    <div class="col-md-12">
                      <p></p>
                      <img src="./img/noticias.gif" align="center">
                    </div>
          </div>

          <div class="col-md-9">
            <h3></h3>
            <h3>LOGIN DE USUARIO</h3>
            <p><strong>Formulario de usuario</strong></p>

            <font font="Browallia New" size=2>Ingrese la informacion solicitada para poder acceder al sitio</font>

            <br>
            <br>

            <form action="./form_handler.php?estado=0" method="POST">
            <p>Correo de usuario:</p>
            <input type="email" name="correo" id="correo" class="textbox" required="required">
            <br>
            <br>
            <p>Password / Clave:</p>
            <input type="password" name="contrasena" id="contrasena" class="textbox" required="required">

            <br>

            <a href="#"><font font="Browallia New" size=2>-Olvide la contraseña-</font></a>

            <br>

            <input type="submit" name="" value="Ingresar" class="button">

            </form>

            <br>
            <br>

            <a href="http://localhost/registro.php"><font font="Browallia New" size=2 color=red>¿No estas registrado? ¡Registrate ahora!</font></a>

            <br>
            <br>
            <br>
            <br>

            <font font="Arial" size=8>Entrar con Facebook</font>
            <br>
            <a href="http://localhost/login.php"><img src="./img/face.png"></a>


          </div>

<!-- Publicidad de las chiquitas -->
            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Publicidad1</strong></h3>
              <a href="#"><img src="./img/add1.png"></a>

              <br>

              <h3></h3>
              <h3><strong>Publicidad2</strong></h3>
              <a href="#"><img src="./img/add1.png"></a>
            </div>

        </div>

        <div class="row mar-top-80" align="center">
          <!-- Publicidad de las largas -->
                    <div class="col-md-12">
                      <p></p>
                      <img src="./img/noticias.gif" align="center">
                    </div>

        </div>


        <div class="sidebars-zone row mar-top-80">
          <div class="col-sm-4">
            <h4>Los mas destacados</h4>
            <p>Super noticia .</p>
            <p>Super noticia .</p>
            <p>Super noticia .</p>
          </div>
          <div class="col-sm-4">
            <h4>Noticias mas destacadas</h4>
            <ul class="list-unstyled">
              <li>
                <a href="#">Bla Bla</a>
              </li>
              <li>
                <a href="#">Bla Bla</a>
              </li>
              <li>
                <a href="#">Bla Bla</a>
              </li>
              <li>
                <a href="#">Bla Bla</a>
              </li>
            </ul>
          </div>
          <div class="col-sm-4">
            <h4>Síguenos en las redes sociales</h4>
            <ul class="list-unstyled">
              <li>
                <a href="#">Facebook</a>
              </li>
              <li>
                <a href="#">Twitter</a>
              </li>
              <li>
                <a href="#">Youtube</a>
              </li>
              <li>
                <a href="#">Instagram</a>
              </li>
            </ul>
          </div>
        </div>

      </div>

    </div>

    <?php
      require_once("pie.php");
    ?>
