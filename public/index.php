<?php
require_once "../autoloader.php";


//Router
switch ($_SERVER["REQUEST_URI"]) {
    case "/";
        new ExampleModel("Página de ejemplo", "Example page for basic php Oneago project");
        break;
        
    default:
        http_response_code(404);
        new NotFoundModel();
}
