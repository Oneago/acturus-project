<?php


namespace App\Controllers;

use App\Bases\TwigController;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

/**
 * Class NotFoundController is a 404 page
 */
class NotFoundController extends TwigController
{

    /**
     * NotFoundController constructor.
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function __construct()
    {
        parent::__construct();
        $this->render();
    }

    public function render()
    {
        /** @noinspection PhpUnhandledExceptionInspection */
        echo self::renderHTML("notFound.twig");
    }
}
