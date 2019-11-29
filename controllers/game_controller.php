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
            $this->auth_helper->check_login();
            $games = $this->model->get_games();
            $this->view->show_games($games, $_SESSION['permiso']);
        }

        //NEW------------
        public function get_games_csr() {
            $this->auth_helper->check_login();
            $this->view->mostrar_juego();
        }

        //done
        public function get_game($params=null){
            $this->auth_helper->check_login();
            $id_juego = $params[':ID'];
            $game = $this->model->get_game($id_juego);

            $this->view->show_game($game, $_SESSION['permiso']);
        }

        //done
        public function delete_game($params=null){
            $this->auth_helper->check_login();
            if($this->auth_helper->get_logged_id_permiso()==1){
                $id= $params[':ID'];
                $this->model->delete_game($id);
            }    
            header('Location: ' . game);
        }

        //done
        public function add_game(){
            $this->auth_helper->check_login();
            if($this->auth_helper->get_logged_id_permiso()==1){
                $categories = $this->cat_model->get_categories();
                $current_date = strftime("%Y-%m-%d-%H-%M-%S", time());
                $this->view->add_game($categories, $_SESSION['permiso']);
            }
            header('Location: ' . game);
        }

        //done
        public function save_game(){
            $this->auth_helper->check_login();
            $nombre = $_POST['nombre'];
            $plataforma = $_POST['plataforma'];
            $categoria = $_POST['categoria'];
            $imagen = $_FILES['game_img']['tmp_name'];
            $save = $_POST['save'];   
            if(isset($save))
                if((!empty($nombre)) && (!empty($plataforma)) && (!empty($categoria))){
                    if(!empty($imagen))
                        if($_FILES['game_img']['type'] == "image/jpg" || $_FILES['game_img']['type'] == "image/jpeg" || $_FILES['game_img']['type'] == "image/png")
                            $path_imagen = $this->model->upload_image($imagen);
                    else
                        $path_imagen = null;
                    $this->model->add_game($nombre,$plataforma,$categoria, $path_imagen); 
                }
            header("Location: " . game);
        }

        //done
        public function save_update_game(){
            $this->auth_helper->check_login();
            $id_juego = $_POST['id_juego'];
            $nombre = $_POST['nombre'];
            $plataforma = $_POST['plataforma'];
            $categoria = $_POST['categoria'];
            $imagen = $_FILES['game_img']['tmp_name'];
            $save= $_POST['save'];
            $delete= $_POST['delete'];
            if(isset($save)){
                if((!empty($nombre)) && (!empty($plataforma))){
                    if(!empty($imagen)){
                        $path_imagen = $this->model->upload_image($imagen);
                    }
                    else{
                        $path_imagen = $_POST['imagen'];
                    }
                    $this->model->update_game($id_juego, $nombre, $plataforma, $categoria, $path_imagen);
                }
            }else if(isset($delete)){
                $path_imagen = null;
                $this->model->update_game($id_juego, $nombre, $plataforma, $categoria, $path_imagen);
            }
            header("Location: " . game);
        }

        //done
        public function update_game($params=null){
            $this->auth_helper->check_login();
            if($this->auth_helper->get_logged_id_permiso()==1){
                $id_juego = $params[':ID'];
                $game = $this->model->get_game($id_juego);
                $category = $this->cat_model->get_categories();
                $this->view->show_update_game($game, $category, $_SESSION['permiso']);
            }else
                header("Location: " . game);
        }

        //DONE
        public function sorted_games($params=null){
            $this->auth_helper->check_login();
            $categoria = $params[':ID'];
            $game = $this->model->get_sorted_games($categoria);
            $this->view->show_game($game, $_SESSION['permiso']);
        }

        

        
        
    }