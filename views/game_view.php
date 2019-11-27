<?php
require_once('libs/Smarty.class.php');

    class game_view {
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', BASE_URL);
        }

        //done
        public function show_game($game, $user_permiso){
            //$this->smarty->assign('basehref', game);
            $this->smarty->assign('game_details', $game);
            //$this->smarty->assign('basehref', user);
            $this->smarty->assign('user_permiso', $user_permiso);
            $this->smarty->display('./templates/game_details.tpl');
        }

        //done
        public function show_update_game($game, $category, $user_permiso){
            $this->smarty->assign('basehref', game);
            $this->smarty->assign('game_detail', $game);
            $this->smarty->assign('basehref', category);
            $this->smarty->assign('category_detail', $category);
            $this->smarty->assign('basehref', user);
            $this->smarty->assign('user_permiso', $user_permiso);
            $this->smarty->display('./templates/update_game.tpl');
        }

        //done
        public function show_games($game, $user_permiso){
            $this->smarty->assign('basehref', game);
            $this->smarty->assign('game_list', $game);
            $this->smarty->assign('basehref', user);
            $this->smarty->assign('user_permiso', $user_permiso);
            $this->smarty->display('./templates/game.tpl');
        }
        
        //done
        public function add_game($categories, $user_permiso){
            $this->smarty->assign('basehref', game);
            $this->smarty->assign('category_list', $categories);
            $this->smarty->assign('basehref', user);
            $this->smarty->assign('user_permiso', $user_permiso);
            $this->smarty->display('./templates/add_game.tpl');
        }

        public function mostrar_juego(){
            $this->smarty->assign('BASE_URL', BASE_URL);
            $this->smarty->assign('titulo',"Mostrar Tareas");
            /*$this->smarty->assign('basehref', category);
            $this->smarty->assign('category_list', $categories);*/
            $this->smarty->display('./templates/ver_juegos_csr.tpl');
        }

    }