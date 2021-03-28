<?php


use Oneago\Arcturus\Core\Router\Request;
use Oneago\Arcturus\Core\Router\Router;

$app = new Router;

$app->get('/', function (Request $request) {
    return view('welcome');
});

$app->get('/d', function (Request $request) {
    return view('TestTest', 'Test');
});

$app->post('/some/route', function (Request $request) {

});

$app->setCustom404Page(function (Request $request) {
    return view('NotFound');
});

$app->run();