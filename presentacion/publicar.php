<?php
session_start();
$page_id = $_SESSION['idusuario'];
$POST_TITULO='Prueba de publicacion "Mercado Esencial"';
$POST_ENLACE='https://www.youtube.com/watch?v=qi5nTb-NRFU';
$POST_IMAGEN='https://www.google.com.uy/search?rlz=1C1PRFC_enUY757UY757&biw=1536&bih=736&tbm=isch&sa=1&q=logo+el+pais&oq=logo+el+pais&gs_l=psy-ab.3..0l4.2042.5092.0.6105.12.12.0.0.0.0.98.1075.12.12.0....0...1.1.64.psy-ab..0.12.1072...0i67k1.0.WyBaPCWu5SM#imgrc=1qf3_V_UY1kc1M:';
//$pathToFile = 'D:/XAMPP/htdocs/Esencial/img/ie.png';
$POST_NOMBRE='Paco';
$POST_LEYENDA='Lo mejor de lo mejor.';
$POST_DESCRIPCION='Calidad suprema máxima del futuro más futuro de todos.';
?>
<html>
<head>
<meta charset="utf-8">
<title>Super Facebook - Publicar en página</title>
<style>

html{
margin:0;
padding:30px;
background-color:#F5F5F5;
}
body{
margin:0;
padding:40px;
background-color:#FFF;
box-shadow:0 3px 5px rgba(0,0,0,0.5);
}
p{
margin:0;
padding:10px 0;
}

</style>
</head>
<body>

<?php

//require_once __DIR__ . './facebook-sdk-v5/autoload.php';

require_once("../facebook-sdk-v5/autoload.php");
//Incluir datos secretos mágicos
require_once('../config.php');

$APP_ID = '1868377656824708';
$APP_SECRET = '34c364017d0cb06f022a9c03cecc1ce5';
$GRAPH_VERSION = 'v2.10';

$fb = new Facebook\Facebook([
  'app_id' => $APP_ID,
  'app_secret' => $APP_SECRET,
  'default_graph_version' => $GRAPH_VERSION,
]);

// Sets the default fallback access token so we don't have to pass it to each request
$fb->setDefaultAccessToken($_SESSION['access_token'] );

try {
  $response = $fb->get('/me');
  $userNode = $response->getGraphUser();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

echo '<p><b>Conectado como</b>: ' . $userNode->getName().'</p>';

if(false==$page_id){
echo '<p>Busca la página en la que quieres publicar.</p>
<p>Asigna su ID a la variable <b>$page_id</b>
<p>Eso lo haces en este mismo archivo <i>publicar-en-pagina.php</i> en la <i>línea 3</i>.</p>
<p>Simplemente abre el archivo en el editor de código y modifica esa línea.</p>';
}

$response = $fb->get('/me/accounts');

foreach ($response->getDecodedBody() as $allAccounts) {
    foreach ($allAccounts as $account ) {
      if(isset($account['id'])){
        if ($account['id'] == $page_id) {
            $appAccessToken = $account['access_token'];
            echo '<p style="color:green;"><b>'.$account['name'].'</b> (<span style="color:#777;">$page_id='.$account['id'].';</span>)</p>';
        }else{
            echo '<p><b>'.$account['name'].'</b> (<span style="color:#777;">$page_id='.$account['id'].';</span>)</p>';
        }
      }
    }
}

//Publicar el super POST cuando haya una página seleccionada
if($page_id){

  try {
      $response = $fb->post(
          '/'.$page_id.'/feed',
          array(
              "message" => $POST_TITULO,
              "link" => $POST_ENLACE,
              "description" => $POST_DESCRIPCION
          ),
          $appAccessToken
      );
      // Success
      $postId = $response->getGraphNode();
      ?>
      <script type="text/javascript">
        window.alert("Se realizo la publicacion correctamente");
        location.href = "../presentacion/index.php";
      </script>

      <?php
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    // When Graph returns an error
    echo '<p>Error de Graph: ' . $e->getMessage().'</p>';
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    // When validation fails or other local issues
    echo '<p>Error de Facebook SDK: ' . $e->getMessage().'</p>';
    exit;
  }

}

?>
</body>
</html>
