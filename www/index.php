<?php
require_once "../autoloader.php";

use App\Controllers\ExampleController;
use App\Controllers\HttpErrorController;
use App\Middlewares\ExampleMiddleware;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;


$app = AppFactory::create();
$errorMiddleware = $app->addErrorMiddleware($_ENV["DEBUG_MODE"], $_ENV["DEBUG_MODE"], $_ENV["DEBUG_MODE"]);
$errorHandler = $errorMiddleware->getDefaultErrorHandler();
$errorHandler->registerErrorRenderer('text/html', HttpErrorController::class);

$app->get('/', function (Request $request, Response $response) {
    new ExampleController(new ExampleMiddleware());
    return $response;
});

$app->get('/hello/{name}', function (Request $request, Response $response, $args) {
    $name = $args['name'];
    $response->getBody()->write("Hello, $name");
    return $response;
});

$app->run();