<?php
    require_once ('./models/user_model.php');
    require_once ('./views/user_view.php');
    require_once ('./helpers/auth_helper.php');
    
    class user_controller{
        private $model;
        private $view;
        private $auth_helper;

        function __construct(){
            $this->model = new user_model();
            $this->view = new user_view();
            $this->auth_helper = new auth_helper();
            
        }

        public function login(){
            $this->view->show_login();
        }

        public function logout(){
            $this->view->show_login();
            header("Location: " . login);
        }

        public function login_verify(){
            //trae los valores de inputs por POST
            $email = $_POST['email'];
            $pass = $_POST['password'];
            //$register = $_POST['register'];
            if(isset($_POST['register'])){ 
                if((!empty($email)) && (!empty($pass))){
                    $this->model->add_user($email, $pass);
                    $this->view->show_login("Usted se ha registrado correctamente.");
                }
                else
                    $this->view->show_login("Faltan datos");
            }else{
                // y si la contraseña concuerda con la db
                if(!empty($email) && !empty($pass)){
                    $user_data = $this->model->get_user($email);//obtiene el usuario en el model
                    if(!empty($user_data)){//si user_data existe en db
                        if(password_verify($pass, $user_data->pass)){//el primer parámetro es el q ingresa el user, el segundo es el q compara con la pass de la db
                            // $this->auth_helper->login($user_data);
                            header("Location: " . game);
                        }else
                            $this->view->show_login("Contraseña incorrecta");
                    }else
                        $this->view->show_login("Usuario no existente");
                }else
                    $this->view->show_login("Faltan datos");

                
            }
            //If isset register --> llamar a add user desde el model
            //else--> que haga todo lo de abajo


        }

    }