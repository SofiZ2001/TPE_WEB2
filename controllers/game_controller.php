<?php
    require_once ('./models/game_model.php');
    require_once ('./views/game_view.php');
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
        public function get_games(){
            //$this->auth_helper->check_login();
            $games = $this->model->get_games();
            $this->view->show_games($games);
        }

        //done
        public function get_game($params=null){
            //$this->auth_helper->check_login();
            $id_juego = $params[':ID'];
            $game = $this->model->get_game($id_juego);
            $this->view->show_game($game);
        }

        //done
        public function delete_game($params=null){
            //$this->auth_helper->check_login();
            $id= $params[':ID'];
            $this->model->delete_game($id);
            header('Location: ' . game);
        }

        //done
        public function add_game(){
            //$this->auth_helper->check_login();
            $categories = $this->cat_model->get_categories();
            $this->view->add_game($categories);
        }

        //este metodo no existe, se tiene que trasladar a save game y save update game
        public function add_game_image($params=null, $imagen=null){
            //$this->auth_helper->check_login();
            $id_juego = $params[':ID'];
            $imagen = $_FILES["uploaded_file"]["name"];
                //si viene la img
                    //add model
                    $add_img = $this->model->add_game_image($id_juego, $imagen);
                    //llamo a get game
                    $game = $this->model->get_game($id_juego);
                    //muestro
                    $this->view->show_game($game);
                //sino muestro mensaje: "la imagen no fue cargada"
            $target_path = "./img/";
            $target_path = $target_path . basename( $_FILES['uploaded_file']['name']); 
            if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $target_path)) {
                echo "El archivo ".  basename( $_FILES['uploadedfile']['name']). 
                " ha sido subido";
            } else{
                echo "Ha ocurrido un error, trate de nuevo!";
            }
        }

        //done
        public function save_game(){
            //$this->auth_helper->check_login();
            $nombre = $_POST['nombre'];
            $plataforma = $_POST['plataforma'];
            $categoria = $_POST['categoria'];
            $imagen = $_FILES['game_img']['tmp_name'];
            $save = $_POST['save'];
            if(isset($save))
                if((!empty($nombre)) && (!empty($plataforma)) && (!empty($categoria))){
                    if($_FILES['game_img']['type'] == "image/jpg" || $_FILES['game_img']['type'] == "image/jpeg" || $_FILES['game_img']['type'] == "image/png")
                        $this->model->add_game($nombre,$plataforma,$categoria, $imagen);
                    else
                        $this->model->add_game($nombre,$plataforma,$categoria);
                }
            header("Location: " . game);
        }

        //done
        public function save_update_game(){
            //$this->auth_helper->check_login();
            $id_juego = $_POST['id_juego'];
            $nombre = $_POST['nombre'];
            $plataforma = $_POST['plataforma'];
            $categoria = $_POST['categoria'];
            $is_image = $_POST['game_img'];//guarda si viene o no la img
            $imagen = $_FILES['game_img']['tmp_name'];
            $save= $_POST['save'];
            if(isset($save))
                if((!empty($nombre)) && (!empty($plataforma))){
                    //$imagen = $_FILES['game_img']['tmp_name'];
                    $this->model->update_game($id_juego, $nombre, $plataforma, $categoria, $imagen);
                }
                    //(if(!empty($is_image)){
                        
                    //}
                    //else
                        //$this->model->update_game($id_juego, $nombre, $plataforma, $categoria);
                    /*if($_FILES['game_img']['type'] == "image/jpg" || $_FILES['game_img']['type'] == "image/jpeg" || $_FILES['game_img']['type'] == "image/png")
                        $this->model->update_game($id_juego, $nombre, $plataforma, $categoria, $imagen);
                    else
                        $this->model->update_game($id_juego, $nombre, $plataforma, $categoria);*/
            header("Location: " . game);
        }

         //done
        public function update_game($params=null){
            //$this->auth_helper->check_login();
            $id_juego = $params[':ID'];
            $game = $this->model->get_game($id_juego);
            $category = $this->cat_model->get_categories();
            $this->view->show_update_game($game, $category);
        }

        public function sorted_games($params=null){
            $categoria = $params[':ID'];
            $game = $this->model->get_sorted_games($categoria);
            $this->view->show_game($game);
        }

        

        
        
    }