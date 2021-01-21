<?php

use PersonFin\Application;
use PersonFin\Plugins\RoutePlugin;
use PersonFin\ServiceContainer;

require_once __DIR__.'/../vendor/autoload.php';

$serviceContainer = new ServiceContainer();
$app = new Application($serviceContainer);

$app->plugin(new RoutePlugin());

$app->get('/', function(){
    echo "Hello Word!";
});

$app->start();
