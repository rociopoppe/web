<?php

    require_once './Vista/ProductosVista.php';
    require_once './Modelo/ProductosModelo.php';
    require_once './Modelo/CategoriasModelo.php';
    
    class ProductosControlador{
    
        private $vista;
        private $modelo;
        private $CategoriasModelo;
    
        function __construct(){
            $this->vista= new ProductosVista(); 
            $this->modelo = new ProductosModelo();
            $this->CategoriasModelo=new CategoriasModelo();
    
        }
    
        function GetProductos(){
            $productos = $this->modelo->GetProductos();
            $this->vista->ShowHomeProductos($productos);
        }
    
      
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
            $producto=$this->modelo->GetProducto($id);
            $p=$producto->id;
            $categorias=$this->CategoriasModelo->GetCategorias();

            $this->vista->ShowEditTask($producto,$categorias);

        }

        
        
        function UpdateProducto($params=null){
            $id = $params[':ID'];
            if(isset($_POST['nombreedit'])&&
                ($_POST['descripcionedit'])&&
                ($_POST['precioedit'])&&
                ($_POST['cantidadedit'])&&
                ($_POST['id_categoriaedit'])){
                    $id= $params[':ID'];
                    $nombre=$_POST["nombreedit"];
                    $descripcion=$_POST['descripcionedit'];
                    $precio=$_POST['precioedit'];
                    $cantidad=$_POST['cantidadedit'];
                    $id_categoria=$_POST['id_categoriaedit'];
                    $this->modelo->UpdateProducto($id,$nombre,$descripcion,$precio,$cantidad,$id_categoria);
                  
            }
            $categorias=$this->CategoriasModelo->GetCategorias();
            $productos=$this->modelo->GetProductos();
            $this->vista->ShowEditTask($productos,$categorias);
        }

        //LLAMA A ACTUALIZAR UN PRODUCTO
       /* function UpdateProduct($params = null){
            $product_id = $params[':ID'];
            if ((isset($_POST['edit_product']) && isset($_POST['edit_price'])) && (isset($_POST['edit_stock']) && isset($_POST['edit_description'])) && isset($_POST['select_brand'])) {
                $product = $_POST['edit_product'];
                $price = $_POST['edit_price'];
                $stock = $_POST['edit_stock'];
                $description = $_POST['edit_description'];
                $brand = $_POST['select_brand'];
                $this->model->UpdateProduct($product,$price,$stock,$description,$brand,$product_id);
            }

            $marks = $this->marksModel->GetMarks();
            $products = $this->model->GetProducts();
            $this->view->ShowLoginUsername($products, $marks);
        }*/
       
    
    }
    
    
    

