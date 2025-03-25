<?php

include_once __DIR__ . "/../Router.php";

class OffersController {

    public static function viewPublic(Router $router) {

        $router->render('public/offers', [
            "title" => "Ofertas"
        ]);
    }

    public static function viewDashboard( Router $router ) {
        $router->render('dashboard/offers', [
            "title" => "Administrar Ofertas"    
        ]);
    }

}

?>