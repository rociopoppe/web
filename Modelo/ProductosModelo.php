<?php

    class ProductosModelo{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
            $this->db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }

        //PRODUCTOS

        function GetProductos(){
            $sentencia=$this->db->prepare("SELECT * FROM Producto");
            $sentencia->execute();
            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

        function GetProducto($id){
            $sentencia=$this->db->prepare("SELECT * FROM Producto where id=?");
            $sentencia->execute(array($id));
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
        
        /*function EditarProductoDelModelo($id){
            $sql = "UPDATE Productos
                    SET nombre = ?, descripcion = ?, precio = ?, cantidad = ?, id_categoria = ?
                    WHERE id = ?";
            $sentencia = $this->db->prepare($sql);
            $sentencia->execute([$id]); // ejecuta   
             
        } */
      

        function UpdateCategoria($nombre, $descripcion, $precio,$cantidad,$id_categoria){
            $sentencia = $this->db->prepare("UPDATE Producto set nombre=?, descripcion=?,precio=?, cantidad=?, id_categoria=?");
            $sentencia->execute(array($nombre, $descripcion, $precio,$cantidad,$id_categoria));
        }

       
        
    }