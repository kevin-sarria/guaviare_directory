<?php

include_once __DIR__ . "/../Router.php";

class HomeController {

    public static function index( Router $router ) {

        $router->render('home', [
            'title' => "Home"
        ]);

    }

}

?>