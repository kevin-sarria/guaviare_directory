<?php

require_once __DIR__ . "/Router.php";
require_once __DIR__ . "/controller/HomeController.php";

$router = new Router;

$router->get('/', [HomeController::class, 'index']);
$router->post('/hola', 'mifunctionPost()');

$router->verifyRoutes();

?>