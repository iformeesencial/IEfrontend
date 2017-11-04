<?php
  require_once("$menu");
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

            <form action="<?php echo $handler;?>?estado=10" method="POST">

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
              <input type="Submit" value="Enviar mensaje" class="button">

            </form>

          </div>

<!-- Publicidad de las chiquitas -->
            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Publicidad1</strong></h3>
              <a href="#"><img src="<?php echo $img;?>add1.png"></a>

              <br>

              <h3></h3>
              <h3><strong>Publicidad2</strong></h3>
              <a href="#"><img src="<?php echo $img;?>add1.png"></a>
            </div>

        </div>

        <div class="row mar-top-80" align="center">
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
      require_once("pie.php");
    ?>
