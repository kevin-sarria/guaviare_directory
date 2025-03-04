<?php

include_once __DIR__ . "/../Router.php";

class CompanyController {

    public static function index( Router $router ) {


        $router->render("dashboard/company", [
            "title" => "Empresa"
        ]);

    }

}





?>