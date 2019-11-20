<?php
    
    class user_model{

        private $db;
        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=juegos;charset=utf8', 'root', '');
        }

        //DONE
        public function get_user($email){
            $sentence = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
            $sentence->execute(array($email));
            return $sentence->fetch(PDO::FETCH_OBJ);
        }

        //DONE
        public function get_login_user($email){
            $sentence = $this->db->prepare("SELECT * FROM usuario WHERE email=?");
            $sentence->execute(array($email));
            return $sentence->fetchAll(PDO::FETCH_OBJ);
        }

         //DONE
        public function get_id_permiso($permiso){
            $sentence = $this->db->prepare("SELECT id_permiso FROM permisos WHERE permiso=?");
            $sentence->execute(array($permiso));
            return $sentence->fetchAll(PDO::FETCH_OBJ);
        }

        //DONE
        public function get_permisos(){
            $sentence = $this->db->prepare("SELECT * FROM permisos");
            $sentence->execute();
            return $sentence->fetchAll(PDO::FETCH_OBJ);
        }

        //DONE
        public function add_user($email, $pass, $id_permiso){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sentence= $this->db->prepare("INSERT INTO usuario (email, contraseña, id_permiso) VALUES (?,?,?)");
            $sentence->execute(array($email, $hash, $id_permiso));
        }

        //DONE
        public function get_users(){
            $sentence = $this->db->prepare("SELECT * FROM usuario");
            $sentence->execute();
            return $sentence->fetchAll(PDO::FETCH_OBJ);
        }

        //to do
        public function update_user($email,$id_permiso){
            $sentence =$this->db->prepare("UPDATE usuario SET id_permiso=? WHERE email=?");
            $sentence->execute(array($id_permiso, $email));
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