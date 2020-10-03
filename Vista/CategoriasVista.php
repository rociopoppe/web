<?php

require_once('./libs/smarty/Smarty.class.php');

class CategoriasVista{
   
    private $title;
    

    function __construct(){
        $this->title = "Lista de Categorias";
    }

    function ShowHome($categorias){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',$this->title);
        $smarty->assign ('categorias', $categorias);
        $smarty->display('templates/categorias.tpl');
    }

    
    function showHomeLocationCategoria(){
        header("Location: ".BASE_URL."home");
    }

    function mostrarCategoriaEdit($categorias){
        $smarty = new Smarty();
        $smarty->assign('categorias', $categorias); 
        $smarty->display('templates/editarCategoria.tpl'); 
    }

   
}
