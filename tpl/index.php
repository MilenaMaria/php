<?php
require_once("vendor/autoload.php");

$app = new \Slim\Slim();
// caminho principal
$app->get('/', function () {
  // config de rotas
    echo "Home page. ";
});
$app->get(' /teste', function () {
  // config de rotas
    echo json_encode(array(
      'date'=>date("Y-m-d")
    ));
});
$app->get('/hello/:name', function ($name) {
  // config de rotas
    echo "Hello, " . $name;
});
$app->run();


?>
