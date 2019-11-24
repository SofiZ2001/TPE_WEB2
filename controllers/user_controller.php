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

        //done LO uso?***************
        public function get_user($params=null){
            $this->auth_helper->check_login();
            $email = $params[':ID'];
            $user = $this->model->get_user($email);
            $this->view->show_user($user);
        }

        //done
        public function get_users(){
            $this->auth_helper->check_login();
            if($this->auth_helper->get_logged_id_permiso()==1){
                $users = $this->model->get_users();
                $this->view->show_users($users, $_SESSION['permiso']);
            }else
                header("Location: " . game);    
        }

        //done
        public function update_user($params=null){
            $this->auth_helper->check_login();
            if($this->auth_helper->get_logged_id_permiso()==1){
                $email = $params[':ID'];
                $user = $this->model->get_login_user($email);
                $permisos = $this->model->get_permisos();
                $this->view->show_update_user($user, $permisos, $_SESSION['permiso']);
            }else
                header("Location: " . user);
        }
        
        //done
        public function save_update_user(){
            $this->auth_helper->check_login();
            if($this->auth_helper->get_logged_id_permiso()==1){
                $email = $_POST['email'];
                $permiso = $_POST['permiso'];
                if($permiso=='Administrador')
                    $id_permiso=1;
                else if($permiso=='Registrado')
                    $id_permiso=2;
                else
                    $id_permiso=3;
                $save= $_POST['save'];
                if(isset($save))
                    if(!empty($email))
                        $this->model->update_user($email, $id_permiso);
            }    
            header("Location: " . user);
        }

        //done
        public function delete_user($params=null){
            $this->auth_helper->check_login();
            if($this->auth_helper->get_logged_id_permiso()==1){
                $email= $params[':ID'];
                $this->model->delete_user($email);
            }
            header('Location: ' . user);
        }

        //DONE
        public function login(){
            $this->view->show_login();
        }

        public function logout(){
            $this->auth_helper->logout();
            header("Location: " . login);
        }

        public function login_verify(){
            $email = $_POST['email'];
            $pass = $_POST['password'];
            if(isset($_POST['register'])){//REGISTRAR
                if(!empty($email) && !empty($pass)){
                    $user_data = $this->model->get_user($email);
                    if($user_data==null){
                        $id_permiso = 2;
                        $this->model->add_user($email, $pass, $id_permiso);
                        $user_data = $this->model->get_user($email);
                        $this->auth_helper->login($user_data);
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
                    $this->view->show_login("Faltan datos, completelos por favor");
                }
            }else{
                //ASIGNAR PERMISOS DE VIEW --TO DO
                $id_permiso = 3;//PERMISO DE VIEW ONLY
                header("Location: " . login);//no lo llevo a login, le permito entrar a la pagina pero solo con opciones de vista, only read
            }
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
        //MODIFICAR
            //CONTROLAR QUE SEA ADMIN
        //AGREGAR
            //CONTROLAR QUE EL USUARIO ESTE REGISTRADO PERO NO SEA ADMINISTRADOR
        //INVITADO
            //SOLO VISTA








