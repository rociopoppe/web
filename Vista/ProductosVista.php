<?php

require_once('./libs/smarty/Smarty.class.php');

class ProductosVista{
   
    private $title;
    

    function __construct(){
        $this->title = "Lista de Productos";
    }

    function ShowHomeProductos($productos){ 
        $smarty = new Smarty();
        $smarty->assign('titulo',$this->title);
        $smarty->assign('productos', $productos); 
        $smarty->display('templates/productos.tpl'); 
    }

    function ShowHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function ShowEditTask($productos){
        $smarty = new Smarty();
        $smarty->assign('productos', $productos); 
        $smarty->display('templates/editarProducto.tpl'); 
    }

    

   
}
