<?php

include_once __DIR__ . "/../Router.php";

class ProductsController {

    public static function index( Router $router ) {


        $router->render("dashboard/products", [
            "title" => "Productos"
        ]);

    }

}





?>