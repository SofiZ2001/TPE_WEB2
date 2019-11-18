<?php
    
    class user_model{

        private $db;
        
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=juegos;charset=utf8', 'root', '');
        }

        public function get_user($email){
            $sentence = $this->db->prepare( "SELECT pass FROM usuario WHERE email=?");
            $sentence->execute(array($email));
            return $sentence->fetch(PDO::FETCH_OBJ);
        }
        public function add_user($email, $pass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sentence= $this->db->prepare("INSERT INTO usuario (email, pass) VALUES (?,?)");
            $sentence->execute(array($email, $hash));
        }

        public function search_user($email){
            $sentence = $this->db->prepare("SELECT COUNT(*) FROM usuario WHERE email=?");
            return $sentence->execute(array($email));
        }
    } 