<?php


namespace App\Controllers;

use App\Bases\TwigController;

/**
 * Class NotFoundController is a 404 page
 */
class NotFoundController extends TwigController
{

    /**
     * NotFoundController constructor.
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
