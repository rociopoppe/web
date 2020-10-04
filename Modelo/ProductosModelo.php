<?php

    class ProductosModelo{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
            $this->db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }


        function GetProductos(){
            $sentencia=$this->db->prepare("SELECT * FROM Producto");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        function GetProducto($id){
            $sentencia=$this->db->prepare("SELECT * FROM Producto where id=?");
            $sentencia->execute([$id]);
            return $sentencia->fetch(PDO::FETCH_OBJ);
        }
     
        
   
        //funciona
        function InsertProducto($nombre, $descripcion, $precio,$cantidad,$id_categoria){
            $sentencia = $this->db->prepare("INSERT INTO Producto(nombre, descripcion,precio, cantidad, id_categoria) VALUES(?,?,?,?,?)");
            $sentencia->execute(array($nombre, $descripcion, $precio,$cantidad,$id_categoria));
            return $this->db->lastInsertId();
        }
        
        //funciona
        function DeleteProductoDelModelo($id){
            $sentencia = $this->db->prepare("DELETE FROM Producto WHERE id=?");
            $sentencia->execute(array($id));
        }
        
       
      
  
        function UpdateProducto($id,$nombre, $descripcion, $precio,$cantidad,$id_categoria){
            $sentencia = $this->db->prepare("UPDATE Producto set nombre=?, descripcion=?,precio=?, cantidad=?, id_categoria=? WHERE id=?");
            $sentencia->execute(array($nombre, $descripcion, $precio,$cantidad,$id_categoria,$id));
        }
       

        function GetProductosXCategoria($id_categoria){
            var_dump("entre a buscar prod x categoria modelo");
            $sentencia = $this->db->prepare("SELECT * FROM Producto WHERE id=?");
            $sentencia->execute([$id_categoria]);
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

     /*  //BUSCO LOS PRODUCTOS QUE COICIDAN CON EL ID DEL FILTRO POR MARCA
       function GetProductsByMark($mark_id){
        $sentencia = $this->db->prepare("SELECT * FROM producto WHERE id_marca=?");
        $sentencia->execute([$mark_id]);
        return $sentencia->fetchAll(PDO::FETCH_OBJ);
    }*/
    
    }
       
        
    