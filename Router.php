<?php

include_once __DIR__ . "/functions/functions.php";

class Router {

    public array $getRoutes = [];
    public array $postRoutes = [];

    public function get($path, $fn) {
        $this->getRoutes[$path] = $fn;
    }

    public function post($path, $fn) {
        $this->postRoutes[$path] = $fn;
    }

    public function verifyRoutes() {
        $current_url = $_SERVER['PATH_INFO'] ?? '/';
        $method = $_SERVER['REQUEST_METHOD'];

        if( $method == 'GET' ) {
            $fn = $this->getRoutes[$current_url] ?? null;
        } else {
            $fn = $this->postRoutes[$current_url] ?? null;
        }

        if( $fn ) {
            call_user_func($fn, $this);
        } else {
            header('Location: /404');
        }
    }

    public function render($view, $datos) {

        $current_url = $_SERVER['PATH_INFO'] ?? '/';

        foreach( $datos as $key => $value ) {
            $$key = $value;
        }

        
        ob_start();

        include_once __DIR__ . "/view/public/$view.php";
        
        $contenido = ob_get_clean();

        if( $current_url == "/login" || $current_url == "/register" || $current_url == "/404" ) {
            include_once __DIR__ . "/includes/authTemplate.php";
        } else if( $current_url == "/dashboard/" ) {
            include_once __DIR__ . "/includes/adminTemplate.php";
        } else {
            include_once __DIR__ . "/includes/generalTemplate.php"; 
        }


    }

}

?>