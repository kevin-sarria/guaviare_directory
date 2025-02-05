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
            // header('Location: /404');
            debbuguear($this->postRoutes);
        }
    }

    public function render($view, $datos) {

        foreach( $datos as $key => $value ) {
            $$key = $value;
        }

        
        ob_start();

        include_once __DIR__ . "/view/$view.php";
        
        $contenido = ob_get_clean();

        include_once __DIR__ . "/includes/generalTemplate.php";

    }

}

?>