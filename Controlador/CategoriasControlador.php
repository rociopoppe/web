<?php

    require_once './Vista/CategoriasVista.php';
    require_once './Modelo/CategoriasModelo.php';
    
    class CategoriasControlador{

        private $vista;
        private $modelo;
    
        function __construct(){
            $this->vista= new CategoriasVista();
            $this->modelo = new CategoriasModelo();
    
        }
    
        function ShowCategorias(){
            $categorias=$this->modelo->GetCategorias();
            $this->vista->ShowHome($categorias);
        }
    
  
        function InsertarCategoria(){
            $this->modelo->InsertCategoria($_POST['descripcion']);
            $this->vista->showHomeLocationCategoria();  
        }

        function BorrarCategoria($params=null){
            $id= $params[':ID'];
            $this->modelo->DeleteCategoriaDelModelo($id);
            $this->vista->showHomeLocationCategoria();
        }

        //funcionan INSERTAR Y BORRAR

        function EditarCategoria($params=null){
            $id_categoria= $params[':ID'];
            $this->modelo->GetCategoria($id_categoria);
            $this->vista->mostrarCategoriaEdit($id_categoria);  
        }
        
        function UpdateCategoria($params=null){
            $id_categoria= $params[':ID'];
            $categoria=$this->modelo->UpdateCategoria($id_categoria);
            $this->vista->showHomeLocationCategoria();  //estaba hecho con show home location

        }
        
    
       
       

    
       
    
    }
    
    