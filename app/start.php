<?php

session_cache_limiter(false);

session_start();
define('INC_ROOT', dirname(__DIR__));

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Exception\NotFoundException;
use Slim\Factory\AppFactory;

require INC_ROOT . '/vendor/autoload.php';

$app = AppFactory::create();

$middleware = $app->addErrorMiddleware(true,true,true);


$app->get('/', function(Request $request, Response $response) {
    echo 'Home';

    return $response;
});

