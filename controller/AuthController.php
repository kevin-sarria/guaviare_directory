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

            // Insertar en la base de datos
            $sql = "INSERT INTO users (username, email, password) VALUES (:username, :email, :password)";
            $stmt = $pdo->prepare($sql);

            try {
                $stmt->execute([
                    ':username' => $username,
                    ':email' => $email,
                    ':password' => $password
                ]);
                header("Location: /login");
                exit;
            } catch (PDOException $e) {
                die("Error al registrar: " . $e->getMessage());
            }
        }

    }

    public static function recoverAccount( Router $router ) {

        $router->render('public/recover_account', [
            "title" => "Recuperar Cuenta"
        ]);

    }

}



?>