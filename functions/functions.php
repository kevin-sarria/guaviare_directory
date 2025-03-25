<?php

    function debbuguear( $variable_to_debug ) {
        echo "<pre>";
        var_dump($variable_to_debug);
        echo "</pre>";
    }

    function is_auth() {
        if( session_status() === PHP_SESSION_NONE ) session_start();
        return isset($_SESSION["user_id"]);
    }

?>