<?php
require_once 'vendor/autoload.php';  // Composer autoload file

use App\Core\Router;



// Initialize the router
$router = new Router();

// Load routes configuration
require_once 'routes/web.php';

// Resolve the current request


$router->resolve();
