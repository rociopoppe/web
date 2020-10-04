<?php
   
    require_once './Controlador/ProductosControlador.php';
    require_once './Controlador/CategoriasControlador.php';
    require_once './Controlador/HomeControlador.php';
    require_once 'RouterClass.php';
    

    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    //define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/'login);
    //define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/')logout;

    $r = new Router();

    // rutas

    $r->addRoute("productos", "GET", "ProductosControlador", "GetProductos");

    $r->addRoute("productos/insert", "POST", "ProductosControlador", "InsertarProducto");

    $r->addRoute("productos/borrar/:ID", "GET", "ProductosControlador", "BorrarProducto");

    $r->addRoute("productos/editar/:ID", "GET", "ProductosControlador", "EditarProducto");

    $r->addRoute("productos/update/:ID", "POST", "ProductosControlador", "UpdateProducto");

    


    $r->addRoute("categorias", "GET", "CategoriasControlador", "ShowCategorias");

    $r->addRoute("categorias/insert", "POST", "CategoriasControlador", "InsertarCategoria");

    $r->addRoute("categorias/borrar/:ID", "GET", "CategoriasControlador", "BorrarCategoria");

    $r->addRoute("categorias/editar/:ID", "GET", "CategoriasControlador", "EditarCategoria");

    $r->addRoute("guardareditar/:ID", "GET", "CategoriasControlador", "UpdateCategoria");


    //Ruta por defecto.
    $r->setDefaultRoute("HomeControlador", "Home");

    //run
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>
