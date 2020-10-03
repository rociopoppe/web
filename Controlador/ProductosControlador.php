<?php

    require_once './Vista/ProductosVista.php';
    require_once './Modelo/ProductosModelo.php';
    
    class ProductosControlador{

        private $vista;
        private $modelo;
    
        function __construct(){
            $this->vista= new ProductosVista();
            $this->modelo = new ProductosModelo();
    
        }
    
        function GetProductos(){
            $productos = $this->modelo->GetProductos();
            $this->vista->ShowHomeProductos($productos);
        }
    
       /* 
       FALTA ESTA FUNCION PARA MOSTRAR LISTA DE PRODUCTOS FUERA DEL HOME
       function getTasks($params=null){
            if(empty($params)) {
                $productos = $this->modelo->getProductos();
                $this->vista->response($productos, 200);
            }
            else {
                $idTask = $params[':ID'];
                $task = $this->model->getTask($idTask);
                if ($task)
                    $this->view->response($task, 200);
                else
                    $this->view->response("no existe tarea con id {$idTask}", 404);
            }
        }
    
        }*/
        function InsertarProducto(){
            $id_categoria=$_POST["id_categoria"];
            if(isset($_POST["helados"])){
               $id_categoria=$_POST['helados'];
            }
            if(isset($_POST["postres"])){
               $id_categoria= $_POST['postres'];
            }
            if (isset($_POST["cafe"])){
                $id_categoria=$_POST['cafe'];

            }
            $this->modelo->InsertProducto($_POST['nombre'],$_POST['descripcion'],$_POST['precio'],$_POST['cantidad'],$id_categoria);
            $this->vista->ShowHomeLocation();
        }
         //funciona INSERTAR Y BORRAR pero nos lleva a la home gral en lugar de a la home de productos
        function BorrarProducto($params = null){
            $id = $params[':ID'];
            $this->modelo->DeleteProductoDelModelo($id);
            $this->vista->ShowHomeLocation();
        }


        //lo hice teniendo en cuenta el modelo de los tasks - tandil
        function EditarProducto($params = null){
            $id = $params[':ID'];
            $this->modelo->GetProducto($id);
            $this->vista->ShowEditTask($id);

        }
    
        
        function UpdateProducto($params=null){
            $id= $params[':ID'];
            $producto=$this->modelo->UpdateProducto($id);
            $this->vista->ShowHomeLocation();  //estaba hecho con show home location

        }

        
       
    
    }
    
    
    

