<?php

include_once __DIR__ . "/../Router.php";

class NotFoundController {

    public static function index( Router $router ) {

        $router->render('404', [
            "title" => "Pagina No Encontrada"
        ]);
    }

}






?>