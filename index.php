<?php

require_once __DIR__ . "/Router.php";
require_once __DIR__ . "/controller/HomeController.php";
require_once __DIR__ . "/controller/CategoriesController.php";
require_once __DIR__ . "/controller/OffersController.php";
require_once __DIR__ . "/controller/AuthController.php";
require_once __DIR__ . "/controller/NotFoundController.php";

$router = new Router;

$router->get('/', [HomeController::class, 'index']);
$router->get('/categories', [CategoriesController::class, 'index']);
$router->get('/offers', [OffersController::class, 'index']);

// Auth
$router->get('/login', [AuthController::class, 'login']);


// 404 Error
$router->get('/404', [NotFoundController::class, 'index']);

$router->verifyRoutes();

?>