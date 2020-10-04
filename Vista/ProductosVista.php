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
    
    function MostrarXFiltro($productos,$categorias,$id_categoria){
        $smarty = new Smarty();
        $smarty->assign('productos', $productos); 
        $smarty->assign('categorias', $categorias); 
        $smarty->assign('id_categoria', $id_categoria);
        $smarty->display('templates/productos.tpl'); 
    }
    

    function ShowEditTask($producto,$categorias){
        $smarty = new Smarty();
        $smarty->assign('BASE_URL', BASE_URL);
        $smarty->assign('producto', $producto); 
        $smarty->assign ('categorias',$categorias);
        $smarty->display('templates/editarProducto.tpl'); 
        $this->base =  "http://".$_SERVER["SERVER_NAME"] . dirname($_SERVER["PHP_SELF"]);
        $smarty->assign('base',$this->base);
    }

    function ShowError($error) {
        $smarty = new Smarty();

        $smarty->assign('error', $error);
    
        $smarty->display('templates/error.tpl');
    }

    function ShowProducto($producto,$categoria) {
        $smarty = new Smarty();
        $smarty->assign('producto', $producto);
        $smarty->assign ('categoria',$categoria);
        $smarty->display('templates/verdetalleProducto.tpl');
    }
    

   
}
