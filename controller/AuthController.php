<?php

include_once __DIR__ . "/../Router.php";

class AuthController {

    public static function login( Router $router ) {

        $router->render('login', [
            "title" => "Iniciar Sesion"
        ]);

    }

}



?>