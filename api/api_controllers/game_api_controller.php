<?php
/*require_once ('././models/game_model.php');
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
    
    public function get_game($params = null) {
        $id_juego = $params[':ID'];
        $game = $this->model->get_game($id);
        if ($game)
            $this->view->response($game, 200);   
        else
            $this->view->response("No existe la tarea con el id={$id_juego}", 404);
    }
}
*/
require_once ('api_controller.php');
require_once ('././models/game_model.php');

class game_api_controller extends api_controller{

    private $model;
    private $view;

    public function __construct() { 
       parent::__construct();
       $this->model = new game_model();
       //$this->view = new json_view();
    }
    
    //GET COMMENT AND GET COMMENTS
    //POR QUE NO ME ANDA ESTE METODO?
   /* public function get_games($params = null) {
        if(isset($params)){
            $id_juego = $params[':ID'];
            $games = $this->model->get_game($id_juego);
        }else
            $games = $this->model->get_games();
        if (isset($games))
            return $this->response($games, 200);   
        else
            return $this->response(null, 404);
    }*/

    //GET COMMENTS
    public function get_games($params = null) {
        $games = $this->model->get_games();
        if (isset($games))
            return $this->response($games, 200);   
        else
            return $this->response(null, 404);
    }

    //GET COMMENT
    public function get_comment($params = null) {
        $id_juego = $params[':ID'];
        $comment = $this->model->get_comment($id_juego);
        if($comment)
            $this->response($comment, 200);   
        else
            $this->response("No existe la tarea con el comentario={$id_juego}", 404);
    }
    
    /*public function get_game($params = null) {
        $id_juego = $params[':ID'];
        $game = $this->model->get_game($id_juego);
        if($game)
            $this->response($game, 200);   
        else
            $this->response("No existe la tarea con el id={$id_juego}", 404);
    }*/

    //DELETE COMMENT
    public function delete_game($params = []) {
        $id_juego = $params[':ID'];
        $game = $this->model->get_game($id_juego);
        if($game) {
            $this->model->delete_game($id_juego);
            $this->response("Juego eliminado con éxito", 200);
        }
        else 
            $this->response("Juego not found", 404);
    }

    //ADD COMMENT
    public function add_game($params = []){     
        $game = $this->get_data();
        $game_id = $this->model->add_game($game->nombre, $game->plataforma, $game->categoria, $game->imagen);
        $new_game = $this->model->get_game($game_id);
        if($new_game)
            $this->response($new_game, 200);
        else
            $this->response("Error al insertar juego", 500);
    }

    /*public function update_game($params = []) {
        $id_juego = $params[':ID'];
        $game = $this->model->get_game($id_juego);

        if ($game) {
            $body = $this->get_data();
            $nombre = $body->titulo;
            $plataforma = $body->plataforma;
            $categoria = $body->categoria;
            $path_imagen = null;
            $tarea = $this->model->ActualizarTarea($id_juego, $nombre, $plataforma, $categoria, $path_imagen);
            $this->view->response("Juego actualizado con éxito", 200);
        }
        else 
            $this->view->response("Juego not found", 404);
    }*/


}
