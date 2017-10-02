<?php
	include("../config.php");

	if (isset($_SESSION['access_token'])) {
		header('Location: http://localhost/index.php');
		exit();
	}

	$redirectURL = "http://localhost/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);

	//die(var_dump($loginURL));
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" crossorigin="anonymous">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
	<!-- Font Awesome CDN -->
	<script src="https://use.fontawesome.com/025d1f53df.js"></script>
	<!-- Main CSS -->
	<link rel="stylesheet" href="./estilo/style.css" type="text/css">
    <title>Entrar Facebook</title>

</head>
<body>

	<div class="container" style="margin-top: 100px">
		<div class="col-md-12" align="center">

        		<img src="img/ie.png" width="200" height="200">
				<img src="img/face.png"><br><br>

				<form>
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Ingresa con Facebook" class="button">
					<?php

				die(var_dump($loginURL));
					 ?>
        		</form>

        		<br>
	            <br>

        		<div class="col-md-12">
	              <a href="#"><img src="./img/add1.png"></a>
	              <a href="#"><img src="./img/add1.png"></a>
	              <br>
	              <br>
            	</div>

            	<div class="col-md-12" align="center">
        			<img src="./img/noticias.gif">
        		</div>

        </div>

        	</div>
    </div>
