<?php

    class comments_model{

    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=juegos;charset=utf8', 'root', '');
    }

    //done
    public function get_comments(){
        $sentence = $this->db->prepare("SELECT * FROM comentarios ORDER BY fecha ASC, puntaje ASC");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    //done
    public function get_commentary($id_juego){
        $sentence = $this->db->prepare("SELECT * FROM comentarios WHERE id_juego=?");
        $sentence->execute(array($id_juego));
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    //DONE
    public function add_commentary($id_juego, $comentario, $puntaje, $fecha){
        $sentence = $this->db->prepare("INSERT INTO comentarios (id_juego, comentario, puntaje, fecha) VALUES(?,?,?,?)");
        $sentence->execute(array($id_juego, $comentario, $puntaje, $fecha$));
        return $this->db->lastInsertId();
    }

    //DONE
    public function delete_commentary($id_juego){
        $sentence = $this->db->prepare ("DELETE FROM comentarios WHERE id_juego=?");
        $sentence->execute(array($id_juego));
    }
 }