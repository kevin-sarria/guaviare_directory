<?php

include_once __DIR__ . "/../Router.php";

class OffersController {

    public static function index( Router $router ) {

        $router->render('offers', [
            "title" => "Ofertas"
        ]);

    }

}


?>