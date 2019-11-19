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
            $user_data = $this->model->get_user($email);//obtiene el usuario en el model
            $u = $email . " ". $pass;//debug
            if(isset($_POST['register'])){//REGISTRAR
                if(!empty($email) && !empty($pass)){
                    $exists = $this->model->search_user($email);
                    if($exists==null){
                        $this->model->add_user($email, $pass);
                        header("Location: " . game);
                    }else
                        $this->view->show_login("Usted ya posee una cuenta");//
                }
                else
                    $this->view->show_login("Faltan datos 1");
            }elseif(isset($_POST['login'])){//INICIAR SESION
                // y si la contraseña concuerda con la db
                if(!empty($email) && !empty($pass)){
                    if(!empty($user_data)){//si user_data existe en db
                        if(password_verify($pass, $user_data->contraseña)){//input user = db_pass ?
                            //$this->auth_helper->login($user_data);
                            header("Location: " . game);
                        }else
                            $this->view->show_login("Contraseña incorrecta");
                    }else
                        $this->view->show_login("Usuario no existente");
                }else{
                    $this->view->show_login("Faltan datos 2");
                }

                
            }
            //If isset register --> llamar a add user desde el model
            //else--> que haga todo lo de abajo
            //FLUJO
                //REGISTRAR
                    //REGISTRO EXITOSO -DONE
                        //AGREGO AL MODEL -DONE
                            //MUESTRO MENSAJE DE REGISTRO -DONE
                                //LO LLEVO A GAME -DONE
                                    //LO DEJO LOGUEADO -DOne
                    //SI SE REGISTRA Y YA EXISTE MOSTRAR MENSAJE DE ERROR
                //INICIAR SESION
                    //LOGIN
                        //EMAIL+CONTRASEÑA COINCIDEN
                        //MOSTRAR ERROR DE DATOS INCORRECTOS
                //INVITADO
                    //VER CUALQUIER COSA->NO MODIFICAR NADA

        }

    }