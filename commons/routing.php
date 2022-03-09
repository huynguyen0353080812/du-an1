<?php

use App\Controllers\LaptopController;
use Phroute\Phroute\RouteCollector;

function applyRoute($url){
    $router = new RouteCollector();


    $router->get('laptops', [LaptopController::class, 'index']);



    $dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
    $response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($url, PHP_URL_PATH));
    // Print out the value returned from the dispatched function
    echo $response;
}


?>