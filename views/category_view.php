<?php
require_once('libs/Smarty.class.php');

	class category_view {
		private $smarty;

	    function __construct(){
	    	$this->smarty = new Smarty();
            $this->smarty->assign('basehref', BASE_URL);
	    }

	    //done
	    public function show_category($category){
	    	$this->smarty->assign('basehref', category);
	    	$this->smarty->assign('category_details',$category);
	        $this->smarty->display('./templates/category_details.tpl');
	    }

	    //done
	    public function show_update_category($category){
	    	//$this->smarty->assign('basehref', category);
	    	$this->smarty->assign('category_detail',$category);
	        $this->smarty->display('./templates/update_category.tpl');
	    }

	    //done
	    public function show_categories($category){
			$this->smarty->assign('basehref', category);
	        $this->smarty->assign('category_list',$category);
	        $this->smarty->display('./templates/category.tpl');
	    }  

	    //done
	    public function add_category(){
            $this->smarty->display('./templates/add_category.tpl');
        }
	} 