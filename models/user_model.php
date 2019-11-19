<?php
    
    class user_model{

        private $db;
        
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=juegos;charset=utf8', 'root', '');
        }

        //not used yet
        public function get_user($email){
            $sentence = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
            $sentence->execute(array($email));
            return $sentence->fetch(PDO::FETCH_OBJ);
        }

        public function add_user($email, $pass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sentence= $this->db->prepare("INSERT INTO usuario (email, contraseña) VALUES (?,?)");
            $sentence->execute(array($email, $hash));
        }

        //not used yet
        public function get_users(){
            $sentence = $this->db->prepare("SELECT * FROM usuario");
            $sentence->execute();
            return $sentence->fetchAll(PDO::FETCH_OBJ);
        }

        //not used yet
        public function delete_user($email){
            $sentence = $this->db->prepare("DELETE FROM usuario WHERE email=?");
            $sentence->execute(array($email));
        }

        //No devuelve entero?
        /*public function search_user($email){
            $sentence = $this->db->prepare("SELECT COUNT(email) FROM usuario WHERE email=?");
            return $sentence->execute(array($email));
        }
        //optimization
        public function search_user($email){
            $sentence = $this->db->prepare("SELECT email FROM usuario WHERE email=?");
            $sentence->execute(array($email));
            return $sentence->fetch(PDO::FETCH_OBJ);
        }*/
    } 