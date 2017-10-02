<?php
  require_once("../presentacion/menu.php");
 ?>

<title>Contactos</title>

    <div id="main">
      <div class="container">

        <div class="row mar-top-80" align="center">
          <div class="col-md-9">
            <h3></h3>
            <h3>CONTACTATE CON NOSOTROS</h3>
            <p><strong>Formulario de usuario</strong></p>

            <font font="Browallia New" size=2>Ingrese la informacion solicitada para poder enviarnos su correo</font>
              
              <br>
              <br>

            <form action="../logica/procesarcontacto.php" method="POST">

              <p>Correo de usuario:</p>
              <input type="email" name="correo" id="correo" class="textbox" required="required">

              <br>
              <br>

              <p>Password / Clave:</p>
              <input type="password" name="contrasena" id="contrasena" class="textbox" required="required">

              <br>
              <br>


              <p>Asunto del correo:</p>
              <input type="text" name="asunto" id="asunto" class="textbox" required="required" placeholder="Asunto">
              
              <br>
              <br>
              <p>Redacte su correo:</p>
              <textarea class="estilotextarea" name="name" rows="6" cols="80" maxlength="300" placeholder="Comentario"></textarea>
              <br>
              <font font="Browallia New" size=2 color="red">Maximo 300 caracteres</font>
              <br>
              <input type="Submit" name="" value="Enviar mensaje" class="button">

            </form>

          </div>

<!-- Publicidad de las chiquitas -->
            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Publicidad1</strong></h3>
              <a href="#"><img src="../presentacion/img/add1.png"></a>

              <br>

              <h3></h3>
              <h3><strong>Publicidad2</strong></h3>
              <a href="#"><img src="../presentacion/img/add1.png"></a>
            </div>

        </div>

        <div class="row mar-top-80" align="center">
          <!-- Publicidad de las largas -->
                    <div class="col-md-12">
                      <p></p>
                      <img src="../presentacion/img/noticias.gif" align="center">
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
      require_once("../presentacion/pie.php");
    ?>