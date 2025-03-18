<?php

include_once __DIR__ . "/../Router.php";

class OffersController {

    public static function index(Router $router, $dashboard = false) {
        $view = $dashboard ? 'dashboard/offers' : 'public/offers';

        $router->render($view, [
            "title" => "Ofertas"
        ]);
    }

}

?>