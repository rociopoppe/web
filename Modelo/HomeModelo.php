<?php

    class HomeModelo{
        
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


        function GetCategorias(){
            $sentencia=$this->db->prepare("SELECT * FROM Categoria");
            $sentencia->execute();

            return $sentencia->fetchAll(PDO::FETCH_OBJ);
        }

    }

