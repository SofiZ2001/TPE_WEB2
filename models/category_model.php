<?php

 class category_model{

    private $db;
    function __construct(){
        $this->db = new PDO('mysql:host=localhost;'.'dbname=juegos;charset=utf8', 'root', '');
    }

    //done
    public function get_categories(){
        $sentence = $this->db->prepare( "SELECT * FROM categoria ORDER BY nombre_categoria");
        $sentence->execute();
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    //done
    public function get_category($nombre_categoria){
        $sentence = $this->db->prepare( "SELECT * FROM categoria WHERE nombre_categoria=?");
        $sentence->execute(array($nombre_categoria));
        return $sentence->fetchAll(PDO::FETCH_OBJ);
    }

    //done
    public function add_category($nombre_categoria, $descripcion){
        $sentence = $this->db->prepare("INSERT INTO categoria(nombre_categoria,descripcion) VALUES(?,?)");
        $sentence->execute(array($nombre_categoria,$descripcion));
    }

    //done
    public function update_category($nombre_categoria,$descripcion){
        $sentence =$this->db->prepare("UPDATE categoria SET descripcion=? WHERE nombre_categoria=?");
        $sentence->execute(array($descripcion, $nombre_categoria));
    }

    //done
    public function delete_category($nombre_categoria){
        $sentence = $this->db->prepare ("DELETE FROM categoria WHERE nombre_categoria=?");
        $sentence->execute(array($nombre_categoria));
    }
 }