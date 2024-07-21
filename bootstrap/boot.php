<?php

include "constants.php";
require BASE_DIR. 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASE_DIR);
$dotenv->Load();

session_start();

$router = new \Bramus\Router\Router();

// require BASE_DIR.'Models/Model.php';
// Create Router instance
// Define routes
require BASE_DIR.'routesList/routes.php';
// Run it!
$router->run();

