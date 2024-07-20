<?php

include "constants.php";
require BASE_DIR. 'vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(BASE_DIR);
$dotenv->Load();


session_start();



require BASE_DIR.'traits/Session_helpers.php';
require BASE_DIR.'traits/VisCounter.php';
use Traits\Session_helpers;
use Traits\VisCounter;
$router = new \Bramus\Router\Router();

// require BASE_DIR.'Models/Model.php';
// Create Router instance
// Define routes

require BASE_DIR.'app/Middlewares.php';

require BASE_DIR.'routesList/routes.php';
// Run it!
$router->run();

