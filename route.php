<?php
	require_once ('controllers/game_controller.php');
	require_once ('controllers/category_controller.php');
	require_once ('controllers/user_controller.php');
	require_once ('router.php');

	define('BASE_URL', 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
	define('game', BASE_URL . 'game');
	define('category', BASE_URL . 'category');
	define('login', BASE_URL . 'login');
	define('logout', BASE_URL . 'logout');
	define('update_game', BASE_URL . 'update_game');
	define('update_category', BASE_URL . 'update_category');
	define('user', BASE_URL . 'user');
	$r = new Router();
	//$r->setDefaultRoute('user_controller', 'login');

	$action = $_GET["action"];
	$method = $_SERVER["REQUEST_METHOD"];

	//USER
	$r->addRoute('user', 'GET', 'user_controller', 'get_users');
	$r->addRoute('delete_user/:ID', 'GET', 'user_controller', 'delete_user');
	$r->addRoute('update_user/:ID','GET','user_controller','update_user');
	$r->addRoute('save_update_user/:ID', 'POST', 'user_controller', 'save_update_user');

	//LOGIN
	$r->addRoute('login', 'GET', 'user_controller', 'login');
	$r->addRoute('logout', 'GET', 'user_controller', 'logout');
	$r->addRoute('login_verify', 'POST', 'user_controller', 'login_verify');

	//GAME.      ($url,	$verb, 	   $controller,		$method)
	$r->addRoute('game', 'GET', 'game_controller', 'get_games');
	$r->addRoute('game_csr', 'GET', 'game_controller', 'get_games_csr');
	$r->addRoute('game/:ID', 'GET', 'game_controller', 'get_game');
	$r->addRoute('sorted_games/:ID','GET','game_controller','sorted_games');

	$r->addRoute('delete/:ID', 'GET', 'game_controller', 'delete_game');

	$r->addRoute('add_game', 'GET', 'game_controller', 'add_game');
	$r->addRoute('save_game','POST','game_controller','save_game');
	$r->addRoute('save_game','POST','game_controller','save_game');

	$r->addRoute('update_game/:ID','GET','game_controller','update_game');
	$r->addRoute('save_update_game/:ID', 'POST', 'game_controller', 'save_update_game');

	//CATEGORY
	$r->addRoute('category', 'GET', 'category_controller', 'get_categories');
	$r->addRoute('category/:ID', 'GET', 'category_controller', 'get_category');

	$r->addRoute('delete_category/:ID', 'GET', 'category_controller', 'delete_category');

	$r->addRoute('add_category', 'GET', 'category_controller', 'add_category');//refactor to list_item by category
	$r->addRoute('save_category','POST','category_controller','save_category');

	$r->addRoute('update_category/:ID','GET','category_controller','update_category');
	$r->addRoute('save_update_category/:ID','POST','category_controller','save_update_category');


	$r->route($action, $method);