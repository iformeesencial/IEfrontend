<?php
require_once("menu.php");

	//if ((!isset($_SESSION['access_token'])) AND (!isset($_SESSION['loginusu']))) {
		/*
		if (!isset($_SESSION['loginusu'])) {

        ?>
        <script type="text/javascript">
          window.alert("No se a logueado aun!");
          location.href = "http://localhost/login2.php";
        </script>
        <?php

        exit();
      }else{
*/
?>
<title>Perfil -Usuario-</title>

    <div id="main">
      <div class="container">

        <div class="row mar-top-80" align="center">
          <div class="col-md-9">
            <h3></h3>
            <h3>Perfil de usuario (<?php echo $_SESSION['loginusu'];?>)</h3>
            <p><strong>Informacion general de usuario</strong></p>

            <font font="Browallia New" size=2>-Vea la informacion general de su perfil y edite-</font>

            <br>
            <br>

						<img src="<?php echo $_SESSION['userData']['picture']['url'] ?>">

						<br>
						<br>

            <p><strong>Nombre y apellido de usuario:</strong></p>
            <p><?php echo $_SESSION['userData']['first_name'] ?> <?php echo ""; ?><?php echo $_SESSION['userData']['last_name'] ?></p>
            <br>

            <p><strong>Correo de usuario:</strong></p>
            <p><?php echo $_SESSION['userData']['email'] ?></p>
            <br>

            <p><strong>Telefono:</strong></p>
            <p><?php echo $_SESSION['loginusu'];?></p>
            <br>

            <p><strong>Suscripcion</strong></p>
            <p>-NO SUSCRIPTO-</p>

            <a href="http://localhost/registro.php"><font font="Browallia New" size=2 color=red>¿No esta suscripto? ¡Suscribese ahora!</font></a>

            <br>
            <br>

            <a href="./form_handler.php?estado=1"><font font="Browallia New" size=2 color=red>Modificar</font></a>
            <a href="./form_handler.php?estado=4"><font font="Browallia New" size=2 color=red>Cerrar Sesion</font></a>
            <a href="#"><font font="Browallia New" size=2 color=red>Borrar Cuenta</font></a>

          </div>

<!-- Publicidad de las chiquitas -->
            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Publicidad1</strong></h3>
              <a href="#"><img src="./img/add1.png"></a>

              <br>
              <br>

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

        <?php
         require_once("pie2.php");
        ?>

      </div>
    </div>

  	<?php
     //}
  	 require_once("pie.php");
  	?>
