<?php


namespace App\Config;


interface MiddlewareInterface
{
    public function check(): bool;
}