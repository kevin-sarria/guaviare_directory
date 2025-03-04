<?php

include_once __DIR__ . "/../Router.php";

class AuthController {

    public static function login( Router $router ) {

        $router->render('public/login', [
            "title" => "Iniciar Sesion"
        ]);

    }

    public static function register( Router $router ) {

        $router->render('public/register', [
            "title" => "Registrarse"
        ]);

    }

    public static function recoverAccount( Router $router ) {

        $router->render('public/recover_account', [
            "title" => "Recuperar Cuenta"
        ]);

    }

}



?>