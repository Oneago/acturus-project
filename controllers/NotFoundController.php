<?php


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
        echo $this->renderHTML("notFound.twig");
    }
}
