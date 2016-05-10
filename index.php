<?php
session_start();
if (!isset($_SESSION['url'])) {
    $_SESSION['url'] = "http://proagro.tuxianof.com";
}
$routeServer = $_SESSION['url'] . "/";
include 'src/system/data.php';

//Se valida si se requiere uso de WebServices
if(isset($_GET['get'])){
  header("Location: " . $routeServer . $urls['routing'] . "?get=" . $_GET['get']);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Proagro</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="public/css/style.css">

</head>
<body>

<div id="main-container">

    <?php
    include_once $urls['menu'];
    include_once $urls['message'];
    include_once $urls[$view];

    //Cuando se desee eliminar la sesion manualmente.
    if (isset($_GET['close'])) {
        session_destroy();
        header("Location: " . $routeServer);
    }

    if($view == "map"){
    ?>
      <script src="public/js/maps.js" charset="utf-8"></script>
    <?php
    }
    ?>
    <script src="public/js/message.js" charset="utf-8"></script>
</div>
</body>
</html>