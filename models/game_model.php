<?php

    class game_model{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=juegos;charset=utf8', 'root', '');
    }

    //done
    public function get_games(){
        $sentence = $this->db->prepare("SELECT * FROM juego ORDER BY categoria ASC, nombre ASC, plataforma ASC");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    public function get_sorted_games($categoria){
        $sentence = $this->db->prepare("SELECT id_juego, nombre, plataforma, categoria FROM juego WHERE categoria=? ORDER BY nombre ASC, plataforma ASC");
        $sentence->execute(array($categoria));
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    //done
    public function get_game($id_juego){
        $sentence = $this->db->prepare("SELECT * FROM juego WHERE id_juego=?");
        $sentence->execute(array($id_juego));
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    //DONE
    public function add_game($nombre, $plataforma, $categoria, $imagen = null){
        $path_img = null;
        if($imagen)
            $path_img = $this->upload_image($imagen);
        $sentence = $this->db->prepare("INSERT INTO juego (nombre, plataforma, categoria, imagen) VALUES(?,?,?,?)");
        $sentence->execute(array($nombre,$plataforma,$categoria,$path_img));
        //return $this->db->lastInsertId();// QUE DEVUELVO ACA SI ES UN ADD? POR QUE NECESITO DEVOLVERLO?
    }

    //DONE
    public function update_game($id_juego, $nombre, $plataforma, $categoria, $imagen=null){
        $path_img = null;
        if($imagen)
            $path_img = $this->upload_image($imagen);
        $sentence = $this->db->prepare("UPDATE juego SET nombre=?, plataforma=?, categoria=?, imagen=? WHERE id_juego=?");
        $sentence->execute(array($nombre,$plataforma,$categoria,$path_img,$id_juego));
        //return $this->db->lastInsertId();// QUE DEVUELVO ACA SI ES UN ADD? POR QUE NECESITO DEVOLVERLO?
        //return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    //NEW
    private function upload_image($imagen){
        $target = 'img/' . uniqid() . '.jpg';
        move_uploaded_file($imagen, $target);
        return $target;
    }

    //DONE
    public function delete_game($id_juego){
        $sentence = $this->db->prepare ("DELETE FROM juego WHERE id_juego=?");
        $sentence->execute(array($id_juego));
    }
 }