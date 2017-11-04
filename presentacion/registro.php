<?php
require_once("$menu");
 ?>

<title>Registro nuevo</title>

    <div id="main">
      <div class="container">

        <div class="row mar-top-80" align="center">
          <div class="col-md-9">
            <h3></h3>
            <h3>REGISTRO DE NUEVO USUARIO</h3>
            <p><strong>Formulario de nuevo usuario</strong></p>

            <font font="Browallia New" size=2>Ingrese la informacion solicitada para poder crear un nuevo perfil en el sitio</font>

            <br>
            <br>

            <form action="<?php echo $handler;?>?estado=3" method="POST">

            <p>Nombre:</p>
            <input type="text" name="nombre" id="nombre" class="textbox" required="required">
            <br>
            <br>

            <p>Apellido:</p>
            <input type="text" name="apellido" id="apellido" class="textbox" required="required">
            <br>
            <br>

            <p>Correo Electronico:</p>
            <input type="email" name="correo" id="correo" class="textbox" required="required">
            <br>
            <br>

            <p>Telefono:</p>
            <input type="text" name="tel" id="tel" required="required" class="textbox">
            <br>
            <br>
            <input type="text" name="tel2" id="tel2" class="textbox" style="display:none">

            <br>
            <button type="submit" name="boton" onclick=Mostrar_ocultar(); class="button">Agregar</button>

            <br>
            <br>

            <p>Tipo de usuario:</p>
              <select name="tipo" class="select">
                        <option value="Sin suscripcion">Sin suscripcion</option>
                        <option value="Suscripcion 3 dias">Suscripcion 3 dias</option>
                        <option value="Suscripcion semanal">Suscripcion semanal</option>
                        <option value="Suscripcion mensual">Suscripcion mensual</option>
              </select>
          
            <br>
            <br>

            <p>Contraseña:</p>
            <input type="password" name="contrasena" id="contrasena" class="textbox" required="required">
            <br>
            <br>

            <p>Confirmar Contraseña:</p>
            <input type="password" name="contrasena2" id="contrasena2" class="textbox" required="required">
            <br>
            <br>

            <input type="submit" value="Crear usuario" class="button">
            </form>

            <br>
            <br>

            <a href="<?php echo $login2;?>"><font font="Browallia New" size=2 color=red>¿Ya estas registrado? ¡Ingresa ahora!</font></a>

          </div>

<!-- Publicidad de las chiquitas -->
            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Publicidad1</strong></h3>
              <a href="#"><img src="<?php echo $img;?>add1.png"></a>

              <br>
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
