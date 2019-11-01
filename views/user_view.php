<?php 
    require_once('libs/Smarty.class.php');

    class user_view {
        private $smarty;

        function __construct(){
            $this->smarty = new Smarty();
            $this->smarty->assign('basehref', BASE_URL);
        }

        public function show_login($message = ''){
            $this->smarty->assign('basehref', login);
            $this->smarty->assign('message', $message);
            $this->smarty->display('./templates/user_login.tpl');
        }
    }
