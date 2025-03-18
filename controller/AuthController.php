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

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            global $pdo;

            $username = trim($_POST["username"]);
            $email = trim($_POST["email"]);
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Encriptar contraseña

        }

    }

    public static function recoverAccount( Router $router ) {

        $router->render('public/recover_account', [
            "title" => "Recuperar Cuenta"
        ]);

    }

}



?>