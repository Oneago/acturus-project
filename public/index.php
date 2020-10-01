<?php

use App\Controllers\ExampleController;
use App\Controllers\NotFoundController;
use App\Middlewares\ExampleMiddleware;

require_once "../autoloader.php";


//Router
switch ($_SERVER["REQUEST_URI"]) {
    case "/";
        new ExampleController("Página de ejemplo", "Example page for basic php Oneago project");
        break;

    case "/test";
        new ExampleMiddleware();
        break;

    default:
        http_response_code(404);
        new NotFoundController();
}
