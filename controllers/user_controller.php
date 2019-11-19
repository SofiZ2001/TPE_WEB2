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
            $this->auth_helper->logout();
            header("Location: " . login);
        }

        public function login_verify(){
            //trae los valores de inputs por POST
            $email = $_POST['email'];
            $pass = $_POST['password'];
            if(isset($_POST['register'])){//REGISTRAR
                if(!empty($email) && !empty($pass)){
                    $user_data = $this->model->get_user($email);
                    if($user_data==null){
                        $this->model->add_user($email, $pass);
                        //$this->auth_helper->login($user_data);//linea necesaria?register->login
                        header("Location: " . game);
                    }else
                        $this->view->show_login("Usted ya posee una cuenta");
                }
                else
                    $this->view->show_login("Complete todos los datos por favor");
            }else if(isset($_POST['login'])){//INICIAR SESION
                if(!empty($email) && !empty($pass)){
                    $user_data = $this->model->get_user($email);//obtiene el usuario en el model
                    if(!empty($user_data)){//si user existe en db
                        if(password_verify($pass, $user_data->contraseña)){//input user = db_pass ?
                            $this->auth_helper->login($user_data);
                            header("Location: " . game);
                        }else
                            $this->view->show_login("Contraseña incorrecta");
                    }else
                        $this->view->show_login("Usuario no existente");
                }else{
                    $this->view->show_login("Faltan datos");
                }
            }else
                header("Location: " . login);
        }

    }

    //FLUJO LOGIN
        //REGISTRAR -DONEEEE
            //REGISTRO EXITOSO -DONE
                //AGREGO AL MODEL -DONE
                    //MUESTRO MENSAJE DE REGISTRO -DONE
                        //LO LLEVO A GAME -DONE
                            //LO DEJO LOGUEADO -DONE
            //SI SE REGISTRA Y YA EXISTE MOSTRAR MENSAJE DE ERROR -DONE
        //INICIAR SESION -DONE
            //LOGIN -DONE
                //EMAIL+CONTRASEÑA COINCIDEN -DONE
                //MOSTRAR ERROR DE DATOS INCORRECTOS -DONE
        //INVITADO -TO DO
            //VER CUALQUIER COSA->NO MODIFICAR NADA -TO DO      


    //FLUJO ROLES Y PERMISOS
        
