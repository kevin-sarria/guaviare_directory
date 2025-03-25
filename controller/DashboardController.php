<?php

include_once __DIR__ . "/../Router.php";

class DashboardController {

    public static function index( Router $rotuer ) {

        $isAuth = is_auth();

        if( !$isAuth ) {
            return header("Location: /");
        }

        $rotuer->render('dashboard/home', [
            "title" => "Dashboard"
        ]);

    }

}


?>