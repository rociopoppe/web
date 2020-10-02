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
    
        function Home(){
            $productos = $this->modelo->GetProductos();
            $categorias=$this->modelo->GetCategorias();
            $this->vista->ShowHome($productos, $categorias);
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
            
            
            /* FALTA HACER PAG DE ERROR
            if ($id) {
                $this->modelo->EditarProducto($_POST['nombremod'],$_POST['descripcionmod'],$_POST['preciomod'],$_POST['cantidadmod'],$id_categoria);
                $this->vista->ShowHomeLocation();
            }
            else{
                $this->vista->response("Producto id=$id not found", 404);
            }*/

        }
    
    

    }
    
    
    

