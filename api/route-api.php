<?php
require_once('./router.php');
require_once('api_controllers/game_api_controller.php');

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
// recurso solicitado
$resource = $_GET["resource"];
// método utilizado
$method = $_SERVER["REQUEST_METHOD"];
$r = new Router();

//GAME
$r->addRoute('game', 'GET', 'game_api_controller', 'get_games');
$r->addRoute('game/:ID', 'GET', 'game_api_controller', 'get_game');

// rutea
$r->route($resource, $method);
//$r->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);

