<?php
   
    require_once './Controlador/ProductosControlador.php';
    require_once './Controlador/CategoriasControlador.php';
    require_once 'RouterClass.php';

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    //define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/'login);
    //define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/')logout;

    $r = new Router();

    // rutas
    $r->addRoute("home", "GET", "ProductosControlador", "Home");

    $r->addRoute("productos", "GET", "ProductosControlador", "Productos");

    $r->addRoute("productos/insert", "POST", "ProductosControlador", "InsertarProducto");

    $r->addRoute("productos/borrar/:ID", "GET", "ProductosControlador", "BorrarProducto");

    $r->addRoute("productos/editar/:ID", "GET", "ProductosControlador", "EditarProducto");

    $r->addRoute("categorias", "GET", "CategoriasControlador", "Categorias");

    $r->addRoute("categoria/insert", "POST", "CategoriasControlador", "InsertarCategoria");

    $r->addRoute("categoria/borrar/:ID", "GET", "CategoriasControlador", "BorrarCategoria");

    $r->addRoute("categorias/editar/:ID", "GET", "CategoriasControlador", "EditarCategoria");
    

    //Ruta por defecto.
    $r->setDefaultRoute("ProductosControlador", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
