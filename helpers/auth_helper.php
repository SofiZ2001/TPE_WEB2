<?php 
	
	class auth_helper{

		public function __construct(){
		}
		
		public function login($user){
			session_start();
			$_SESSION['user'] = $user->email;
		}

		public function check_login(){
            session_start();
            if(!isset($_SESSION['user'])){
                header("Location: " . login);
                die();
			}
        }

        public function logout(){
        	session_start();
        	session_destroy();
        }
	}