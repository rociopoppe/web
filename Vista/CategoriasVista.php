<?php

require_once('./libs/smarty/Smarty.class.php');

class CategoriasVista{
   
    private $title;
    

    function __construct(){
        $this->title = "Lista de Categorias";
    }

    function showHome($categorias){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',$this->title);
        $smarty->assign ('categorias', $categorias);
        $smarty->display('templates/categorias.tpl');
    }

    function showCategorias($categorias){
        
    }
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function ShowEditTask($categorias){
        $smarty = new Smarty();
        $smarty->assign('productos', $categorias); 
        $smarty->display('templates/editarCategoria.tpl'); 
    }

   
}
