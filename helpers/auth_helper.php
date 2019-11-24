<?php 
	
	class auth_helper{

		public function __construct(){
		}
		
		public function login($user){
			session_start();
			$_SESSION['user'] = $user->email;
			$_SESSION['permiso'] = $user->id_permiso;
		}

		public function check_login(){
            session_start();
            if(!isset($_SESSION['user'])){
                header("Location: " . login);
                die();
			}
        }

        /*//LA NECESITO?
        public function is_admin(){
        	//no utilizo session_start porque ya esta inicializada en check-login
        	//siempre ejecuto check-login previamente
            if($_SESSION['permiso']!=1)
                header("Location: " . game);
        }*/

        public function get_logged_id_permiso() {
	        if (session_status() != PHP_SESSION_ACTIVE)
	            session_start();
	        return $_SESSION['permiso'];
	    }


        public function logout(){
        	session_start();
        	session_destroy();
        }
	}