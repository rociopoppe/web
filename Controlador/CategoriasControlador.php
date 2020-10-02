<?php

    class CategoriasModelo{
        
        private $db;

        function __construct(){
            $this->db = new PDO('mysql:host=localhost;'.'dbname=db_productos;charset=utf8', 'root', '');
            $this->db->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }


        function GetCategorias(){
            $sentencia=$this->db->prepare("SELECT * FROM Categoria");
            $sentencia->execute();

            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }
        
        function InsertCategoria($descripcion){
            $sentencia = $this->db->prepare("INSERT INTO Categoria(descripcion) VALUES(?)");
            var_dump($descripcion);
            $sentencia->execute(array($descripcion));
            return $this->db->lastInsertId();
        }

        function DeleteCategoriaDelModelo($id){
            //despues del where va el nombre del id que esta en la tabla
            $sentencia = $this->db->prepare("DELETE FROM Categoria WHERE id_categoria=?");
            $sentencia->execute(array($id));
        
        }
     
        
        


       
  
  
        
    }