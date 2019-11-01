<?php

    class game_model{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=juegos;charset=utf8', 'root', '');
    }

    //done
    public function get_games(){
        $sentence = $this->db->prepare( "SELECT * FROM juego ORDER BY categoria ASC, nombre ASC, plataforma ASC");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }
    public function get_sorted_games($categoria){
        $sentence = $this->db->prepare( "SELECT * FROM juego WHERE categoria=? ORDER BY nombre ASC, plataforma ASC");
        $sentence->execute(array($categoria));
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    //done
    public function get_game($id_juego){
        $sentence = $this->db->prepare( "SELECT * FROM juego WHERE id_juego=?");
        $sentence->execute(array($id_juego));
        return $sentence->fetchAll(PDO::FETCH_OBJ);
        
    }

    public function add_game($nombre, $plataforma, $categoria){
        $sentence = $this->db->prepare("INSERT INTO juego (nombre, plataforma, categoria) VALUES(?,?,?)");
        $sentence->execute(array($nombre,$plataforma,$categoria));
    }
    
    public function update_game($id_juego,$nombre,$plataforma,$categoria){
        $sentence =$this->db->prepare("UPDATE juego SET nombre= ?, plataforma=?, categoria=? WHERE id_juego=?");
        $sentence->execute(array($nombre, $plataforma, $categoria,$id_juego));
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    //error
    public function delete_game($id_juego){
        $sentence = $this->db->prepare ("DELETE FROM juego WHERE id_juego=?");
        $sentence->execute(array($id_juego));
    }
 }