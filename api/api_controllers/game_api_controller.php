<?php
require_once ('././models/game_model.php');
require_once('./api_views/JSONView.php');

class game_api_controller {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new game_model();
        $this->view = new JSONView();
    }

    public function get_games($params = null) {
        $games = $this->model->get_games();
        $this->view->response($games, 200);
    }

    /**
     * Obtiene una tarea dado un ID
     * $params arreglo asociativo con los parámetros del recurso
     */
    public function get_game($params = null) {
        $id_juego = $params[':ID'];
        $game = $this->model->get_game($id);
        if ($game) {
            $this->view->response($game, 200);   
        } else {
            $this->view->response("No existe la tarea con el id={$id_juego}", 404);
        }
    }
}
