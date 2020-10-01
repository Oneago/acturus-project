<?php


namespace App\Bases;


interface MiddlewareInterface
{
    public function check(): bool;
}