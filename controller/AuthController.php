<?php

include_once __DIR__ . "/../Router.php";
include_once __DIR__ . "/../model/User.php";

class AuthController {

    public static function login( Router $router ) {
        
        $isAuth = is_auth();

        if( $isAuth ) {
            return header("Location: /dashboard");
        }

        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {
        
            $email = trim($_POST["email"]);
            $password = trim($_POST["password"]);
        
            // Validar entrada
            if (empty($email) || empty($password)) {
                $errors[] = "Todos los campos son obligatorios.";
            } else {
                $user = new User;
                $user_exist = $user->findByEmail($email);
        
                if (!$user_exist || !password_verify($password, $user_exist["password"])) {
                    return $errors[] = "Credenciales incorrectas.";
                }

                if( !$errors ) {
                    session_start();
                    // Iniciar sesión
                    $_SESSION["user_id"] = $user_exist["id"];
                    $_SESSION["username"] = $user_exist["username"];
                    header("Location: /dashboard");
                }
            }
        }

        $router->render('public/login', [
            "title" => "Iniciar Sesion",
            "erros" => $errors
        ]);

    }

    public static function register( Router $router ) {

        $isAuth = is_auth();

        if( $isAuth ) {
            return header("Location: /dashboard");
        }

        $errors = [];

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $username = filter_var(trim($_POST["username"]), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
            $password = filter_var(trim($_POST["password"]), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $repeat_password = filter_var(trim($_POST["repeat_password"]), FILTER_SANITIZE_SPECIAL_CHARS);

            if( empty($username) || empty($email) || empty($password) || empty($repeat_password) ) {
                return $errors[] = "Todos los campos son Obligatorios";
            }

            $user_data = [
                "username" => $username,
                "email" => $email,
                "password" => $password,
            ];

            $new_user = new User($user_data);
            $new_user->repeat_password = $repeat_password;

            if( $new_user->password !== $new_user->repeat_password ) return $errors[] = "Las password no coinciden";

            // Si no hay errores, generamos el nuevo token y procedemos a guardarlo
            $new_token = md5(rand());
            $new_user->token == $new_token;

            // Especificamos el tipo de usuario que sera, siendo el 1: Admin, 2: User Basico
            $new_user->id_type_user = 2;

            // Guardamos el registro y redireccionamos al usuario
            if( !$errors ) {
                $save_user = $new_user->save();
                debbuguear($save_user);
                if( $save_user ) {
                    session_start();
                    $_SESSION["username"] = $new_user->username;
                    $_SESSION["email"] = $new_user->email;
                    $_SESSION["type_user"] = $new_user->id_type_user;
                    header('Location: /dashboard');
                }
            }
            
        }

        $router->render('public/register', [
            "title" => "Registrarse",
            "errors" => $errors
        ]);

    }

    public static function recoverAccount( Router $router ) {

        $isAuth = is_auth();

        if( $isAuth ) {
            return header("Location: /dashboard");
        }


        $router->render('public/recover_account', [
            "title" => "Recuperar Cuenta"
        ]);

    }

    public static function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: /");
    }

}



?>