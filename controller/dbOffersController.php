<?php

include_once __DIR__ . "/../Router.php";

class dbOffersController {

    public static function index( Router $router ) {

        $router->render('dashboard/offers', [
            "title" => "Ofertas"
        ]);

    }

}


?>