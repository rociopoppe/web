<?php

require_once('./libs/smarty/Smarty.class.php');

class HomeVista{
   
    private $title;
    

    function __construct(){
        $this->title = "";
    }

    function showHome(){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',$this->title);
       
        $smarty->display('templates/home.tpl'); 
    
    }
    
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }



   
}
