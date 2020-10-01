<?php


namespace App\Middlewares;


use App\Config\MiddlewareInterface;

class ExampleMiddleware implements MiddlewareInterface
{
    public function check(): bool
    {
        // TODO: Make your verification and return a boolean value
        return true;
    }
}