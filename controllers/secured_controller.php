<?php

    class secured_controller{

        function __construct(){ 
            session_start();
            if(isset($_SESSION['user'])){
                if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) { //se guarda en segundos
                    logout();
                    //header("Location: " . logout);
                    //die(); // destruye la sesión, y vuelve al login
                } 
                $_SESSION['LAST_ACTIVITY'] = time();//actualiza al ultimo instante
            }else
                header("Location: " . game);   
            
        }


    }