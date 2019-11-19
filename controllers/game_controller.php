<?php
    require_once ('./models/game_model.php');
    require_once ('./views/game_view.php');
    require_once ('secured_controller.php');
    require_once ('./helpers/auth_helper.php');
    require_once ('category_controller.php');

    class game_controller{
        private $model;
        private $view;
        private $auth_helper;
        private $category_controller;

        function __construct(){
            $this->model = new game_model();
            $this->cat_model = new category_model();
            $this->view = new game_view();
            $this->auth_helper = new auth_helper();
        }

        //done
        public function delete_game($params=null){
            $this->auth_helper->check_login();
            $id= $params[':ID'];
            $this->model->delete_game($id);
            header('Location: ' . game);
        }

        //done
        public function add_game(){
            $this->auth_helper->check_login();
            $categories = $this->cat_model->get_categories();
            $this->view->add_game($categories);
        }

        //done
        public function save_game(){
            $this->auth_helper->check_login();
            $nombre = $_POST['nombre'];
            $plataforma = $_POST['plataforma'];
            $categoria = $_POST['categoria'];
            $save = $_POST['save'];
            if(isset($save))
                if((!empty($nombre)) && (!empty($plataforma)) && (!empty($categoria)))
                    $this->model->add_game($nombre,$plataforma,$categoria);
            header("Location: " . game);
        }

        //done
        public function update_game($params=null){
            $this->auth_helper->check_login();
            //$this->check_login();
            $id_juego = $params[':ID'];
            $game = $this->model->get_game($id_juego);
            $category = $this->cat_model->get_categories();
            $this->view->show_update_game($game, $category);
        }

        //done
        public function save_update_game(){
            $this->auth_helper->check_login();
            $id_juego = $_POST['id_juego'];
            //$id_juego = $params[':ID'];
            $nombre = $_POST['nombre'];
            $plataforma = $_POST['plataforma'];
            $categoria = $_POST['categoria'];
            $save= $_POST['save'];
            if(isset($save))
                if((!empty($nombre)) && (!empty($plataforma)))
                    $this->model->update_game($id_juego, $nombre, $plataforma, $categoria);
            header("Location: " . game);
        }

        public function sorted_games($params=null){
            $categoria = $params[':ID'];
            $game = $this->model->get_sorted_games($categoria);
            $this->view->show_game($game);
        }

         //done
        public function get_game($params=null){
            $this->auth_helper->check_login();
            $id_juego = $params[':ID'];
            $game = $this->model->get_game($id_juego);
            $this->view->show_game($game);
        }

        //done
        public function get_games(){
            $this->auth_helper->check_login();
            $games = $this->model->get_games();
            $this->view->show_games($games);
        }
        
    }