<?php

include_once __DIR__ . "/../Router.php";

class DashboardController {

    public static function index( Router $rotuer ) {

        $rotuer->render('dashboard/home', [
            "title" => "Dashboard"
        ]);

    }

}


?>