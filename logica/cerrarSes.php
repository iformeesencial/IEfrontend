<?php
    include("funciones.php");
    sessionCheck();

    $path = $_SERVER['SERVER_ADDR'];
    $host= gethostname();
    $ip = gethostbyname($host);
    session_unset();
    session_destroy();
?>
    <script type="text/javascript">
    window.alert("Sesión cerrada correctamente.");
    location.href="http://localhost/index.php";
    </script>
