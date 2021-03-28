<?php


namespace App\Http\Controllers\Test;


use Oneago\Arcturus\Core\Http\ViewResponse;


/**
 * Class TestTestController
 */
class TestTestController
{
    public function index($view): ViewResponse
    {
        return template($view, [
            "body" => "Example page for basic php Oneago project"
        ]);
    }
}
