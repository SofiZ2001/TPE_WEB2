<?php
require_once('router.php');
require_once('api/api_controllers/game_api_controller.php');

define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
$action = $_GET["action"];
$method = $_SERVER["REQUEST_METHOD"];
$r = new Router();

//GAME
$r->addRoute('game', 'GET', 'game_api_controller', 'get_games');
$r->addRoute('game/:ID', 'GET', 'game_api_controller', 'get_game');
$r->addRoute('game/:ID', 'DELETE', 'game_api_controller', 'delete_game');
$r->addRoute('game', 'POST', 'game_api_controller', 'add_game');
$r->addRoute('game/:ID', 'PUT', 'game_api_controller', 'update_game');


// rutea
$r->route($action, $method);

