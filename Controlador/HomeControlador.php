<?php

    require_once './Vista/HomeVista.php';
    require_once './Modelo/HomeModelo.php';
    
    class HomeControlador{

        private $vista;
        private $modelo;
    
        function __construct(){
            $this->vista= new HomeVista();
            $this->modelo = new HomeModelo();
    
        }
    
        function Home(){
            $productos=$this->modelo->GetProductos();
            $categorias=$this->modelo->GetCategorias();
            $this->vista->ShowHome($productos, $categorias);
        }
    
    }