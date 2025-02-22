<?php

include_once __DIR__ . '/../Router.php';

class CategoriesController {

    public static function index( Router $router ) {

        $router->render('categories', [
            "title" => "Categorias"
        ]);
    }

}





?>