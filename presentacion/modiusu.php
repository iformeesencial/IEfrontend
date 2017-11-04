<?php
require_once("$menu");

    if ((!isset($_SESSION['access_token'])) AND (!isset($_SESSION['loginusu']))) {

        ?>
            <script type="text/javascript">
              window.alert("No se a logueado aun!");
              location.href = "<?php echo $login2; ?>";
            </script>

        <?php

        exit();
      }else{

 ?>

<title>Modificar -Usuario-</title>

    <div id="main">
      <div class="container">

        <div align="center">
          <div class="col-md-12">
            <h3></h3>
            <h3>Modificar Perfil de usuario (nombre usuario)</h3>
            <p><strong>Informacion general del administrador</strong></p>

            <font font="Browallia New" size=2>-Edite su informacion-</font>

            <br>
            <br>


              <?php
              if(isset($_SESSION['modi'])){
                if(!empty($_SESSION['modi'])){
                    $array = $_SESSION['modi'];

                ?>
                  <form action="<?php echo $handler;?>?estado=2" method="POST">
                    <p><strong>Nombre:</strong></p>
                    <input type="text" name="nombre" value="<?php echo $array[0]['nombre'];?>" class="textbox">
                    <br>
                    <br>

                    <p><strong>Apellido:</strong></p>
                    <input type="text" name="apellido" value="<?php echo $array[0]['apellido'];?>" class="textbox">
                    <br>
                    <br>

                    <p><strong>Telefono:</strong></p>
                    <input type="text" name="telefono" value="<?php echo $array[0]['telefono'];?>" class="textbox">
                    <br>
                    <br>

                    <font font="Browallia New" size=2> Suscripcion:</font>
                            <select name="tipo" class="select">
                                <option value="Sin suscripcion">Sin suscripcion</option>
                                <option value="Suscripcion 3 dias">Suscripcion 3 dias</option>
                                <option value="Suscripcion semanal">Suscripcion semanal</option>
                                <option value="Suscripcion mensual">Suscripcion mensual</option>
                            </select>

                    <br>
                    <br>


                    <?php

                      }
                    }
                 ?>

                <a href="#"><font font="Browallia New" size=2 color=red>-Reiniciar contraseña-</font></a>
                <br>
                <br>

                <input type="submit" value="Terminar modificado" class="button">
              </form>

            <br>
            <br>

          </div>
        </div>

      </div>
      <h3></h3>
    </div>

    <?php
        }
     ?>
