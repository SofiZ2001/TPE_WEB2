<?php
require_once ('./models/category_model.php');
require_once ('./views/category_view.php');
require_once ('./helpers/auth_helper.php');

class category_controller{
    private $model;
    private $view;

    function __construct(){
        $this->model = new category_model();
        $this->view = new category_view();
        $this->auth_helper = new auth_helper();
    }

    //done
    public function get_categories(){
        $this->auth_helper->check_login();
        $categories = $this->model->get_categories();
        $this->view->show_categories($categories);
    }

    //done
    public function get_category($params=null){
        $this->auth_helper->check_login();
        $nombre_categoria= $params[':ID'];
        $category = $this->model->get_category($nombre_categoria);
        $this->view->show_category($category);
    }

    //done
    public function delete_category($params=null){
        $this->auth_helper->check_login();
        $id = $params [':ID'];
        $this->model->delete_category($id);
        header("Location: " . category);
    }

    //done
    public function add_category(){
        $this->auth_helper->check_login();
        $this->view->add_category();
    }

    //done
    public function save_category(){
        $this->auth_helper->check_login();
        $nombre_categoria = $_POST['nombre_categoria'];
        $descripcion = $_POST['descripcion'];
        $save = $_POST['save'];
        if(isset($save))
            if((!empty($nombre_categoria)) && (!empty($descripcion)))
                $this->model->add_category($nombre_categoria,$descripcion);
        header("Location: " . category);
    }

    //done
    public function update_category($params=null){
        $this->auth_helper->check_login();
        $nombre_categoria = $params[':ID'];
        $category = $this->model->get_category($nombre_categoria);
        $this->view->show_update_category($category);
    }

    public function save_update_category(){
        $this->auth_helper->check_login();
        $nombre_categoria = $_POST['nombre_categoria'];
        $descripcion = $_POST['descripcion'];
        $save = $_POST['save'];
        if((isset($save))&&(!empty($nombre_categoria)) && (!empty($descripcion)))
            $this->model->update_category($nombre_categoria,$descripcion);
        header("Location: " . category);
    }

    /*public function check_login(){
            session_start();
            if(!isset($_SESSION['userId'])){
                header("Location: " . URL_LOGIN);
                die();
            }

            if ( isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 5000)) { 
                header("Location: " . URL_LOGOUT);
                die(); // destruye la sesión, y vuelve al login
            } 
            $_SESSION['LAST_ACTIVITY'] = time();
        }*/
}