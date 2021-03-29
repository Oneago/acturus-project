<?php


use Oneago\Arcturus\Core\Router\Request;
use Oneago\Arcturus\Core\Router\Router;

$app = new Router;

$app->get('/', function (Request $request, array $args) {
    return view('welcome');
});

$app->get('/test/{var}/', function (Request $request, array $args) {
    return $args['var'];
});

$app->post('/some/route', function (Request $request, array $args) {

});

$app->setCustom404Page(function (Request $request) {
    return view('NotFound');
});

$app->run();