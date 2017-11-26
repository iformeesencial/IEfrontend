<?php
require_once("$menu");

	if ((!isset($_SESSION['access_token'])) AND (!isset($_SESSION['loginusu']))) {

        ?>
        <script type="text/javascript">
          window.alert("No se a logueado aun!");
          location.href = "<?php echo $login2;?>";
        </script>
        <?php

        exit();
      }else{
?>
<title>Perfil -Usuario-</title>

    <div id="main">
      <div class="container">

        <div class="row mar-top-80" align="center">
          <div class="col-md-9">
						<?php

						if(isset($_SESSION['modi'])){
							if(!empty($_SESSION['modi'])){
									$array = $_SESSION['modi'];
						 ?>
            <h3></h3>
            <h3>Perfil de usuario (<?php echo $array[0]['nombre'] . " " . $array[0]['apellido'];?>)</h3>
            <p><strong>Informacion general de usuario</strong></p>

            <font font="Browallia New" size=2>-Vea la informacion general de su perfil y edite-</font>

            <br>
            <br>

						<img src="<?php echo $_SESSION['userData']['picture']['url'] ?>">

						<br>
						<br>

            <p><strong>Nombre y apellido de usuario:</strong></p>
						<?php
								if (isset($_SESSION['access_token'])){
						?>
            <p><?php echo $_SESSION['userData']['first_name'] ?> <?php echo ""; ?><?php echo $_SESSION['userData']['last_name'] ?></p>
						<?php

						}else {
							?>
							<p><?php echo $array[0]['nombre']; ?> <?php echo ""; ?><?php echo $array[0]['apellido']; ?></p>
							<?php
						}
						?>

            <br>

            <p><strong>Correo de usuario:</strong></p>
						<?php
								if (isset($_SESSION['access_token'])){
						?>
            <p><?php echo $_SESSION['userData']['email'] ?></p>
						<?php

						}else {
							?>
							<p><?php echo $array[0]['correo'];?></p>
							<?php
						}
						?>
            <br>

            <p><strong>Telefono:</strong></p>
            <p><?php echo $array[0]['telefono'];?></p>
            <br>

            <p><strong>Suscripcion</strong></p>
            <p><?php echo $array[0]['tipo']; ?></p>

            <a href="<?php echo $modiusu;?>"><font font="Browallia New" size=2 color=red>¿No esta suscripto? ¡Suscribese ahora!</font></a>

            <br>
            <br>

            <a href="<?php echo $handler;?>?estado=1"><font font="Browallia New" size=2 color=red>Modificar</font></a>
            <a href="<?php echo $handler;?>?estado=4"><font font="Browallia New" size=2 color=red>Cerrar Sesion</font></a>
            <a href="<?php echo $handler;?>?estado=14"><font font="Browallia New" size=2 color=red>Borrar Cuenta</font></a>

          </div>

					<?php

							}
						}
					if(isset($_SESSION['access_token'])){
					?>

					<h3></h3>
					<h3>Perfil de usuario (<?php echo $_SESSION['userData']['first_name']; ?> <?php echo ""; ?><?php echo $_SESSION['userData']['last_name']; ?>)</h3>
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

					<a href="<?php echo $modiusu;?>"><font font="Browallia New" size=2 color=red>¿No esta suscripto? ¡Suscribese ahora!</font></a>

					<br>
					<br>

					<a href="<?php echo $handler;?>?estado=1"><font font="Browallia New" size=2 color=red>Modificar</font></a>
					<a href="<?php echo $handler;?>?estado=4"><font font="Browallia New" size=2 color=red>Cerrar Sesion</font></a>
					<a href="<?php echo $handler;?>?estado=14"><font font="Browallia New" size=2 color=red>Borrar Cuenta</font></a>

				</div>
				<?php
					}
				 ?>
<!-- Publicidad de las chiquitas -->
            <div class="col-md-3">
              <h3></h3>
              <h3><strong>Publicidad1</strong></h3>
              <a href="#"><img src="<?php echo $img;?>add1.png"></a>

              <br>
              <br>

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
     }
  	 require_once("pie.php");
  	?>
