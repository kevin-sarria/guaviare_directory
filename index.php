<?php

require_once __DIR__ . "/Router.php";

$router = new Router;

$router->get('/hola', 'mifunction()');
$router->post('/hola', 'mifunctionPost()');

$router->verifyRoutes();

?>