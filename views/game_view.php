<?php
require_once('libs/Smarty.class.php');

    class game_view {
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', BASE_URL);
        }

        //done
        public function show_game($game){
            $this->smarty->assign('basehref', game);
            $this->smarty->assign('game_details',$game);
            $this->smarty->display('./templates/game_details.tpl');
        }

        public function show_update_game($game, $category){
            $this->smarty->assign('basehref', game);
            $this->smarty->assign('game_detail',$game);
            $this->smarty->assign('basehref', category);
            $this->smarty->assign('category_detail',$category);
            $this->smarty->display('./templates/update_game.tpl');
        }

        //done
        public function show_games($game){
            $this->smarty->assign('basehref', game);
            $this->smarty->assign('game_list',$game);
            $this->smarty->display('./templates/game.tpl');
        }
        
        //done
        public function add_game($categories){
            $this->smarty->assign('basehref', game);
            $this->smarty->assign('category_list',$categories);
            $this->smarty->display('./templates/add_game.tpl');
        }
    }